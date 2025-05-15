<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Services\GalleryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    protected GalleryService $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->middleware('auth');
        $this->galleryService = $galleryService;
    }

    public function index(Request $request)
    {
        $breadcrumbs = $this->getBreadcrumbs('List');

        if ($request->ajax()) {

            $galleries = $this->galleryService->getAllGalleries();

            return DataTables::of($galleries)
                ->addIndexColumn()
                ->addColumn('image_path', function ($row) {

                    $html = '';
                    foreach ($row->images as $path) {
                        $imageUrl = asset('storage/' . $path->image_path);

                        $html .= '<img src="' . $imageUrl . '" width="50" height="50" style="margin-right:5px;" />';
                    }

                    return $html ?: '-';
                })

                ->addColumn('category', function ($row) {
                    return optional($row->category)->name ?? '-';
                })
                ->addColumn('title', function ($row) {
                    return e($row->title ?? '-');
                })
                ->addColumn('status', function ($row) {
                    return $row->is_active == 'active'
                    ? '<span class="badge bg-success">Active</span>'
                    : '<span class="badge bg-secondary">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    $edit = route('galleries.edit', $row->id);
                    $del  = route('galleries.destroy', $row->id);
                    return '
                        <a href="' . $edit . '" class="btn btn-sm btn-primary">Edit</a>
                        <form action="' . $del . '" method="POST" style="display:inline;">
                            ' . csrf_field() . method_field('DELETE') . '
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm(\'Delete this image?\')">
                                Delete
                            </button>
                        </form>';
                })
                ->rawColumns(['image_path', 'status', 'action'])
                ->make(true);
        }

        return view('admin.gallery.index', compact('breadcrumbs'));
    }

    public function create()
    {
        $breadcrumbs       = $this->getBreadcrumbs('Create');
        $galleryCategories = GalleryCategory::all();

        return view('admin.gallery.create', compact('breadcrumbs', 'galleryCategories'));
    }

    public function store(GalleryRequest $request)
    {

        return $this->persistGallery($request, 'create');
    }

    public function edit(Gallery $gallery)
    {
        $breadcrumbs       = $this->getBreadcrumbs('Edit');
        $galleryCategories = GalleryCategory::all();
        $gallery->load('images');

        return view('admin.gallery.edit', compact('gallery', 'galleryCategories', 'breadcrumbs'));
    }

    public function update(GalleryRequest $request, Gallery $gallery)
    {

        return $this->persistGallery($request, 'update', $gallery->id);
    }

    public function destroy(Gallery $gallery)
    {
        DB::beginTransaction();
        try {
            $this->galleryService->deleteGallery($gallery->id);
            DB::commit();
            return redirect()->route('galleries.index')->with('success', 'Gallery deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting gallery. Please try again.');
        }
    }

    /** PRIVATE HELPERS */

    private function getBreadcrumbs(string $current): array
    {
        return [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Galleries', 'url' => route('galleries.index')],
            ['name' => $current, 'url' => null],
        ];
    }

    private function persistGallery(GalleryRequest $request, string $action, int $id = null)
    {

        DB::beginTransaction();

        try {
            $files = $request->file('image_path');

            // if (! $files || count($files) === 0) {
            //     return redirect()->back()->withErrors('Please upload at least one image.');
            // }

            $dest = public_path('storage/gallery');
            if (! is_dir($dest)) {
                mkdir($dest, 0755, true);
            }

            $imagePaths = [];
            if (! empty($files)) {
                foreach ($files as $key => $file) {

                    if ($file->getSize() > 10240 * 1024) {
                        return redirect()->back()->withErrors('Each image must not exceed 10MB.');
                    }

                    $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move($dest, $filename);
                    $imagePaths[] = 'gallery/' . $filename;
                }
            }

            $galleryData              = $request->validated();
            $galleryData['is_active'] = $request->input('is_active'); // This will be either 'active' or 'inactive'

            if ($action === 'create') {
                $gallery = $this->galleryService->createGallery($galleryData, $imagePaths);
                $message = 'Gallery created successfully!';
            } else {

                $gallery = $this->galleryService->updateGallery($id, $galleryData, $imagePaths);
                $message = 'Gallery updated successfully!';
            }

            DB::commit();
            return redirect()->route('galleries.index')->with('success', $message);

        } catch (\Exception $e) {
            DB::rollBack();
            report($e); // Log the exception
            return redirect()->back()->withErrors("Error {$action}ing gallery: " . $e->getMessage());
        }
    }

}
