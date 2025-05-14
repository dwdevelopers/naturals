<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Support\Facades\DB;
use App\Services\ContactUsService;

class ContactUsController extends Controller
{
    protected $contactusService;

    public function __construct(ContactUsService $contactusService)
    {

        $this->contactusService = $contactusService;
    }
    public function index()
    {
        return view('website.contact_us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactUsRequest $request)
    {

        $data = $request->validated();
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $product = $this->contactusService->createContact($data);
            DB::commit();
            return redirect()->route('website.home')->with('success', 'Message sent  successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating product. Please try again.');
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
