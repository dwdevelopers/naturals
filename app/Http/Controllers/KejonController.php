<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\TestimonialService;

class KejonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $testimonialService;
         protected $productService;
    public function __construct(TestimonialService $testimonialService, ProductService $productService)
    {

        $this->testimonialService = $testimonialService;
           $this->productService = $productService;

    }
    public function index()
    {
          $products = $this->productService->getAllProducts();

        $testimonials = $this->testimonialService->getAllTestimonials()->where('status', 'approved');
       return view('website.organic-manure-kejon',compact('testimonials', 'products'));
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
