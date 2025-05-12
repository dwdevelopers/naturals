<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\ProjectActivity;
use App\Services\ProjectService;
use App\Services\ProjectActivityService;
use App\Services\TestimonialService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $projectService;
    protected $projectActivityService;
    protected $productService;
    protected $testimonialService;


    public function __construct(ProjectService $projectService,ProjectActivityService $projectActivityService,ProductService $productService,TestimonialService $testimonialService)
    {
        $this->projectActivityService = $projectActivityService;
        $this->projectService = $projectService;
        $this->productService = $productService;
        $this->testimonialService = $testimonialService;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = $this->projectService->getAllProjects()->where('status', 'active');
        $products = $this->productService->getAllProducts();
        $testimonials = $this->testimonialService->getAllTestimonials()->where('status', 'approved');
        return view('website.home', compact('projects', 'products','testimonials'));
    }
    public function about(Request $request)
    {
        $testimonials = $this->testimonialService->getAllTestimonials()->where('status', 'approved');
        return view('website.about_us',compact('testimonials'));
    }
    public function shop(Request $request)
    {

        return view('website.shop');
    }
    public function contactUS(Request $request)
    {

        return view('website.contact_us');
    }
}
