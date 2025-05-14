<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DownloadRequest;
use App\Models\Download;
use App\Services\DownloadCategoryService;
use App\Services\DownloadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class AdminDownloadController extends Controller
{
    protected $downloadService;
    protected $downloadCategoryService;

    public function __construct(DownloadService $downloadService, DownloadCategoryService $downloadCategoryService)
    {
        $this->middleware('auth');

        $this->downloadService         = $downloadService;
        $this->downloadCategoryService = $downloadCategoryService;

    }
    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Downloads', 'url' => route('downloads.index')],
            ['name' => 'Lists', 'url' => null], // Current page
        ];

        if ($request->ajax()) {
            $downloads = $this->downloadService->getAllDownloads();
            return DataTables::of($downloads)
                ->addIndexColumn()

                ->addColumn('image', function ($row) {
                    $imageUrl = asset('storage/' . $row->path); // Adjust path based on storage
                    return '<img src="' . $imageUrl . '" alt="Testimonial Image" width="50" height="50" />';
                })
                ->addColumn('category', function ($row) {
                    return optional($row->category)->name ?? '-';
                })
                ->addColumn('status', function ($row) {
                    return $row->is_active
                    ? '<span class="badge bg-success">Active</span>'
                    : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="' . route('downloads.edit', $row->id) . '" class="btn btn-primary btn-sm">Edit</a>
                            <form action="' . route('downloads.destroy', $row->id) . '" method="POST" style="display:inline;">
                                ' . csrf_field() . '
                                ' . method_field("DELETE") . '
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action', 'image', 'status'])
                ->make(true);
        }

        return view('admin.downloads.index', compact('breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Downloads', 'url' => route('downloads.index')],
            ['name' => 'Create', 'url' => null], // Current page
        ];
        $categories = $this->downloadCategoryService->getAllCategoryDownloads();
        return view('admin.downloads.create', compact('breadcrumbs', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DownloadRequest $request)
    {

        DB::beginTransaction();
        try {
            // Validate the request and get the validated data
            $data = $request->validated();

            // Get the uploaded file (expecting one file)
            $file = $request->file('downloads');

            // Check if a file is uploaded
            if ($file) {
                // Store the file and get its path
                $path = $file->store('downloads', 'public');
                // Prepare the file data for database insertion
                $fileData = [
                    'name'                   => $data['name'],
                    'path'                   => $path,
                    'mime_type'              => $file->getMimeType(),
                    'size'                   => $file->getSize(),
                    'is_active'              => $data['is_active'] ?? true, // Default to true if not provided
                    'download_categories_id' => $data['download_categories_id'],
                ];
                // Create the download entry in the database
                $this->downloadService->createDownload($fileData);
            }

            // Commit the transaction
            DB::commit();
            return redirect()->route('downloads.index')->with('success', 'Download created successfully!');
        } catch (\Exception $e) {
            // Rollback if an error occurs
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating download. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Download $download)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Downloads', 'url' => route('downloads.index')],
            ['name' => 'Edit', 'url' => null], // Current page
        ];
        $categories = $this->downloadCategoryService->getAllCategoryDownloads();

        return view('admin.downloads.edit', compact('download', 'categories', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DownloadRequest $request, Download $download)
    {
        DB::beginTransaction();
        try {
            // Get validated data from the request
            $data = $request->validated();

            // Get the existing download model
            $download = $this->downloadService->getDownloadById($download->id);

            // Check if a new file is uploaded
            if ($request->hasFile('downloads')) {
                $file = $request->file('downloads');

                // Optionally delete the old file
                if ($download->path && \Storage::disk('public')->exists($download->path)) {
                    \Storage::disk('public')->delete($download->path);
                }

                // Store the new file
                $path = $file->store('downloads', 'public');

                // Update file-related fields

                $data['path']      = $path;
                $data['mime_type'] = $file->getMimeType();
                $data['size']      = $file->getSize();
            }
            $data['name']                   = $data['name'];
            $data['download_categories_id'] = $data['download_categories_id'];
            $data['is_active']              = $data['is_active'] ?? true;
            // Update the download entry
            $this->downloadService->updateDownload($download->id, $data);

            DB::commit();
            return redirect()->route('downloads.index')->with('success', 'Download updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error updating download. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Download $download)
    {
        DB::beginTransaction();
        try {

            $this->downloadService->deleteDownload($download->id);

            DB::commit();
            return redirect()->route('downloads.index')->with('success', 'Download deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting Download. Please try again.');
        }
    }
}
