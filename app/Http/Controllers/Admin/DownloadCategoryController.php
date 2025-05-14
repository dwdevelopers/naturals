<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DownloadCategoryRequest;
use App\Models\DownloadCategory;
use App\Services\DownloadCategoryService;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class DownloadCategoryController extends Controller
{
    protected $downloadCategoryService;

    public function __construct(DownloadCategoryService $downloadCategoryService)
    {
        $this->middleware('auth');
        $this->downloadCategoryService = $downloadCategoryService;
    }

    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Download Categories', 'url' => route('download-categories.index')],
            ['name' => 'Lists', 'url' => null]
        ];

        if ($request->ajax()) {
            $categories = $this->downloadCategoryService->getAllCategoryDownloads();

            return DataTables::of($categories)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('download-categories.edit', $row->id).'" class="btn btn-sm btn-primary">Edit</a>
                        <form action="'.route('download-categories.destroy', $row->id).'" method="POST" style="display:inline;">
                            '.csrf_field().method_field('DELETE').'
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</button>
                        </form>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.downloads.category_index', compact('breadcrumbs'));
    }

    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Download Categories', 'url' => route('download-categories.index')],
            ['name' => 'Create', 'url' => null]
        ];

        return view('admin.downloads.category_create', compact('breadcrumbs'));
    }

    public function store(DownloadCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->downloadCategoryService->createDownloadCategory($request->validated());
            DB::commit();
            return redirect()->route('download-categories.index')->with('success', 'Download category created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error saving category. Please try again.');
        }
    }

    public function edit(DownloadCategory $downloadCategory)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Download Categories', 'url' => route('download-categories.index')],
            ['name' => 'Edit', 'url' => null]
        ];

        return view('admin.downloads.category_edit', compact('downloadCategory', 'breadcrumbs'));
    }

    public function update(DownloadCategoryRequest $request, DownloadCategory $downloadCategory)
    {
        DB::beginTransaction();
        try {
            $this->downloadCategoryService->updateDownloadCategory($downloadCategory->id, $request->validated());
            DB::commit();
            return redirect()->route('download-categories.index')->with('success', 'Download category updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error updating category. Please try again.');
        }
    }

    public function destroy(DownloadCategory $downloadCategory)
    {
        DB::beginTransaction();
        try {
            $this->downloadCategoryService->deleteDownloadCategory($downloadCategory->id);
            DB::commit();
            return redirect()->route('download-categories.index')->with('success', 'Download category deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting category. Please try again.');
        }
    }
}
