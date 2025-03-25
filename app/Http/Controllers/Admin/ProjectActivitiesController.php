<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ProjectActivityService;
use App\Services\ProjectService;
use App\Http\Requests\ProjectActivitiesRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProjectActivitiesController extends Controller
{
    protected $projectActivityService;
    protected $projectService; // Add this

    public function __construct(ProjectActivityService $projectActivityService, ProjectService $projectService)
    {
        $this->projectActivityService = $projectActivityService;
        $this->projectService = $projectService; // Initialize it
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            try {
                $projects = $this->projectActivityService->getAllActivities();
                return DataTables::of($projects)
                    ->addIndexColumn()
                    ->addColumn('status', function ($row) {
                        return $row->status === 'active' 
                            ? '<span class="badge bg-success">Active</span>' 
                            : '<span class="badge bg-danger">Inactive</span>';
                    })
                    ->addColumn('name', function ($row) {
                        return $row->activity_name; 
                           
                    })
                    ->addColumn('project_name', function ($row) {
                        return $row->project->name; 
                           
                    })
                    ->addColumn('action', function ($row) {
                        return '<a href="'.route('activities.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                                <form action="'.route('activities.destroy', $row->id).'" method="POST" style="display:inline;">
                                    '.csrf_field().'
                                    '.method_field("DELETE").'
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>';
                    })
                    ->rawColumns(['action', 'status'])
                    ->make(true);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
            }
        }

        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Project Activities', 'url' => route('activities.index')],
            ['name' => 'Lists', 'url' => null]
        ];

        return view('admin.activities.index', compact('breadcrumbs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Project Activities', 'url' => route('activities.index')],
            ['name' => 'Create', 'url' => null]
        ];

        $projects = $this->projectService->getAllProjects();
        return view('admin.activities.create', compact('projects', 'breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectActivitiesRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->projectActivityService->createActivity($request->validated());
            DB::commit();
            return redirect()->route('activities.index')->with('success', 'Project activity created successfully.');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create project activity: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Project Activities', 'url' => route('activities.index')],
            ['name' => 'Edit', 'url' => null]
        ];

        $activity = $this->projectActivityService->getActivityById($id);
        $projects = $this->projectService->getAllProjects();
        return view('admin.activities.edit', compact('activity', 'projects', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectActivitiesRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            $this->projectActivityService->updateActivity($id, $request->validated());
            DB::commit();
            return redirect()->route('activities.index')->with('success', 'Project activity updated successfully.');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update project activity: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $this->projectActivityService->deleteActivity($id);
            DB::commit();
            return redirect()->route('activities.index')->with('success', 'Project activity deleted successfully.');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to delete project activity: ' . $e->getMessage());
        }
    }
}
