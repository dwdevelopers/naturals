<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.home');
    }
    public function about(Request $request)
    {
       
        return view('website.about_us');
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
