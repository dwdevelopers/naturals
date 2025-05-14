<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\GalleryCategoryRequest;
use App\Models\GalleryCategory;
use App\Services\GalleryCategoryService;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class GalleryCategoryController extends Controller
{
    protected $galleryCategoryService;

    public function __construct(GalleryCategoryService $galleryCategoryService)
    {
        $this->middleware('auth');
        $this->galleryCategoryService = $galleryCategoryService;
    }
    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Gallery Categories', 'url' => route('gallery-categories.index')],
            ['name' => 'Lists', 'url' => null]
        ];

        if ($request->ajax()) {
            $categories = $this->galleryCategoryService->getAllCategories();

            return DataTables::of($categories)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {
                    return '<a href="'.route('gallery-categories.edit', $row->id).'" class="btn btn-sm btn-primary">Edit</a>
                        <form action="'.route('gallery-categories.destroy', $row->id).'" method="POST" style="display:inline;">
                            '.csrf_field().method_field('DELETE').'
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</button>
                        </form>';
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        }

        return view('admin.gallery.index_category', compact('breadcrumbs'));
    }

    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Gallery Categories', 'url' => route('gallery-categories.index')],
            ['name' => 'Create', 'url' => null]
        ];

        return view('admin.gallery.create_category', compact('breadcrumbs'));
    }

    public function store(GalleryCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->galleryCategoryService->createCategory($request->validated());
            DB::commit();
            return redirect()->route('gallery-categories.index')->with('success', 'Gallery category created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error saving category. Please try again.');
        }
    }

    public function edit(GalleryCategory $galleryCategory)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Gallery Categories', 'url' => route('gallery-categories.index')],
            ['name' => 'Edit', 'url' => null]
        ];

        return view('admin.gallery.edit_category', compact('galleryCategory', 'breadcrumbs'));
    }

    public function update(GalleryCategoryRequest $request, GalleryCategory $galleryCategory)
    {
        DB::beginTransaction();
        try {
            $this->galleryCategoryService->updateCategory($galleryCategory->id, $request->validated());
            DB::commit();
            return redirect()->route('gallery-categories.index')->with('success', 'Gallery category updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error updating category. Please try again.');
        }
    }

    public function destroy(GalleryCategory $galleryCategory)
    {
        DB::beginTransaction();
        try {
            $this->galleryCategoryService->deleteCategory($galleryCategory->id);
            DB::commit();
            return redirect()->route('gallery-categories.index')->with('success', 'Gallery category deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting category. Please try again.');
        }
    }
}
