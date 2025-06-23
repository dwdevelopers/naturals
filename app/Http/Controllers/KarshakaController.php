<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TestimonialService;

class KarshakaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $testimonialService;
    public function __construct(TestimonialService $testimonialService)
    {

        $this->testimonialService = $testimonialService;
    }
    public function index()
    {
        $testimonials = $this->testimonialService->getAllTestimonials()->where('status', 'approved');
       return view('website.karshaka-mithra',compact('testimonials'));
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
