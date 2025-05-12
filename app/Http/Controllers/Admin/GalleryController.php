<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Services\GalleryService;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

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

            $galleries = $this->galleryService->getAllGalleries(); // Ensure this returns a collection of Gallery models with relationships

            return DataTables::of($galleries)
                ->addIndexColumn()
                // ->addColumn('image_path', function ($row) {
                //     $html = '';
                //     // if (!empty($row->images) && is_array($row->images)) {
                //         // foreach ($row->images as $path) {
                //             $imageUrl = asset($row->image_path);
                //             $html .= '<img src="' . $imageUrl . '" width="50" height="50" style="margin-right:5px;" />';
                //         // }
                //     // }
                //     return $html ?: '-';
                // })
                ->addColumn('image_path', function ($row) {
                    $images = \App\Models\Gallery::where('title', $row->title)->pluck('image_path');
                    $html = '';
                    foreach ($images as $path) {
                        $imageUrl = asset($path);
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
                    return $row->status
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-secondary">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    $edit = route('galleries.edit', $row->id);
                    $del  = route('galleries.destroy', $row->id);
                    return '
                        <a href="'. $edit .'" class="btn btn-sm btn-primary">Edit</a>
                        <form action="'. $del .'" method="POST" style="display:inline;">
                            '. csrf_field() . method_field('DELETE') .'
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
        $breadcrumbs = $this->getBreadcrumbs('Create');
        $galleryCategories = GalleryCategory::all();

        return view('admin.gallery.create', compact('breadcrumbs', 'galleryCategories'));
    }

    public function store(GalleryRequest $request)
    {
        return $this->persistGallery($request, 'create');
    }

    public function edit(Gallery $gallery)
    {
        $breadcrumbs = $this->getBreadcrumbs('Edit');
        $galleryCategories = GalleryCategory::all();
        // $gallery->load('images');

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
            ['name' => $current, 'url' => null]
        ];
    }

    private function persistGallery(GalleryRequest $request, string $action, int $id = null)
    {
        DB::beginTransaction();
        try {
            $files = $request->file('image_path');

            if (count($files) === 0) {
                return redirect()->back()->withErrors('Please upload at least one image.');
            }

            $dest = public_path('gallery_images');
            if (! is_dir($dest)) {
                mkdir($dest, 0755, true);
            }

            // Store images and save file paths
            $imagePaths = [];
            foreach ($files as $file) {
                $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
                $file->move($dest, $filename);
                $imagePaths[] = 'gallery_images/'.$filename;
            }

            // Store gallery details
            $galleryData = $request->validated();
            $galleryData['status'] = $request->input('is_active') === 'active' ? true : false;

            // Create or update gallery
            if ($action === 'create') {
                $gallery = $this->galleryService->createGallery($galleryData);
                $message = 'Gallery created successfully!';
            } else {
                $gallery = $this->galleryService->updateGallery($id, $galleryData);
                $message = 'Gallery updated successfully!';
            }

            // Attach image paths to the gallery (create GalleryImage records)
            foreach ($imagePaths as $imagePath) {
                $gallery->images()->create(['image_path' => $imagePath]);
            }

            DB::commit();
            return redirect()->route('galleries.index')->with('success', $message);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()
                ->back()
                ->withErrors("Error {$action}ing gallery: " . $e->getMessage());
        }
    }


}
