<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectService;
use App\Models\Project;
use App\Models\ProjectActivity;
use App\Services\ProjectActivityService;

class ServicesController extends Controller
{
    protected $projectService;
    protected $projectActivityService;

    public function __construct(ProjectService $projectService,ProjectActivityService $projectActivityService)
    {
        $this->projectActivityService = $projectActivityService;
        $this->projectService = $projectService;

    }
    public function index()
    {
        $projects = $this->projectService->getAllProjects()->where('status', 'active');

        return view('website.service',compact('projects'));
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
    public function show($slug)
    {

        $project = Project::where('slug', $slug)->firstOrFail();  // Find the project by slug
        $project_activity = ProjectActivity::with('project')->where('project_id',$project->id)->first();

        return view('website.service-detail', compact('project_activity'));
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
