<?php
namespace App\Http\Controllers;

use App\Services\DownloadCategoryService;
use App\Services\DownloadService;
use Illuminate\Http\Request;
use App\Models\DownloadCategory;

class DownloadController extends Controller
{
    protected $downloadService;
    protected $downloadCategoryService;

    public function __construct(DownloadService $downloadService, DownloadCategoryService $downloadCategoryService)
    {

        $this->downloadService         = $downloadService;
        $this->downloadCategoryService = $downloadCategoryService;

    }
    public function index()
    {
        $downloads  = $this->downloadService->getAllDownloads();
        $categories = DownloadCategory::all();

        return view('website.download', compact('downloads', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
