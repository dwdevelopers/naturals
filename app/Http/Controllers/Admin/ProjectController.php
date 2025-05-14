<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProjectService;
use App\Http\Requests\ProjectRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class ProjectController extends Controller
{
    use ImageUploadTrait;

    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->middleware('auth');

        $this->projectService = $projectService;

    }
    public function index(Request $request)
    {
        // Define breadcrumbs for the index page
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Project', 'url' => route('projects.index')],
            ['name' => 'Lists', 'url' => null] // Current page
        ];

        if ($request->ajax()) {
            $projects = $this->projectService->getAllProjects();

            return DataTables::of($projects)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $imageUrl = asset('storage/'.$row->image); // Adjust path based on storage
                    return '<img src="'.$imageUrl.'" alt="Testimonial Image" width="50" height="50" />';
                })
                ->addColumn('status', function ($row) {
                    return $row->status === 'active'
                    ? '<span class="badge bg-success">Active</span>'
                    : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('projects.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('projects.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action', 'image', 'status'])
                ->make(true);
        }

        return view('admin.project.index', compact('breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Define breadcrumbs for the create page
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Project', 'url' => route('projects.index')],
            ['name' => 'Create', 'url' => null] // Current page
        ];
        $projects = $this->projectService->getAllProjects();
        return view('admin.project.create', compact('projects', 'breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $data = $request->validated();
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $data['slug'] = Project::generateUniqueSlug($data['name']);

            if ($request->hasFile('image')) {
                if ($request->hasFile('image')) {
                    $data['image'] = $this->uploadImage($request->file('image'), 'projects');
                }
            }

            $product = $this->projectService->createProject($data);



            DB::commit();
            return redirect()->route('projects.index')->with('success', 'Project created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating Project. Please try again.');
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
    public function edit(Project $project)
    {
        // Define breadcrumbs for the edit page
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Projects', 'url' => route('projects.index')],
            ['name' => 'Edit', 'url' => null] // Current page
        ];

        return view('admin.project.edit', compact('project', 'breadcrumbs'));
    }

    public function update(ProjectRequest $request, Project $project)
    {


        DB::beginTransaction();
        try {
            $data = $request->validated();
            if ($request->hasFile('image')) {
                if ($project->image) {
                    Storage::disk('public')->delete($project->image);
                }
                $data['image'] = $this->uploadImage($request->file('image'), 'projects');
            }

            $this->projectService->updateProject($project->id, $data);
            DB::commit();
            return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error updating Project. Please try again.');
        }
    }

    public function destroy(Project $project)
    {
        DB::beginTransaction();
        try {
            // Delete Product
            $this->projectService->deleteProject($project->id);

            DB::commit();
            return redirect()->route('project.index')->with('success', 'Project deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting Project. Please try again.');
        }
    }
}
