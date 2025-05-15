<?php
namespace App\Http\Controllers;

use App\Services\GalleryCategoryService;
use App\Services\GalleryService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    protected $galleryService;
    protected $galleryCategoryService;

    public function __construct(GalleryService $galleryService, GalleryCategoryService $galleryCategoryService)
    {
        $this->galleryCategoryService = $galleryCategoryService;
        $this->galleryService         = $galleryService;
    }
    public function index()
    {
        $galleries  = $this->galleryService->getAllGalleries()->where('is_active', 'active');
        $categories = $this->galleryCategoryService->getAllCategories();

        return view('website.gallery', compact('galleries', 'categories'));
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
