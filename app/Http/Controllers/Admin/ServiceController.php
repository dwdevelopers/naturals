<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ServiceService;
use App\Http\Requests\ServiceRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Service;

class ServiceController extends Controller
{
    protected $serviceService;

    public function __construct(ServiceService $serviceService)
    {
        $this->middleware('auth');
        $this->serviceService = $serviceService;
    }

    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Services', 'url' => route('services.index')],
            ['name' => 'List', 'url' => null]
        ];

        if ($request->ajax()) {
            $services = $this->serviceService->getAllServices();

            return DataTables::of($services)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->is_active
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('services.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('services.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        }

        return view('admin.services.index', compact('breadcrumbs'));
    }

    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Services', 'url' => route('services.index')],
            ['name' => 'Create', 'url' => null]
        ];

        return view('admin.services.create', compact('breadcrumbs'));
    }

    public function store(ServiceRequest $request)
    {

        $data = $request->validated();

        DB::beginTransaction();
        try {

            $data['slug'] = Service::generateUniqueSlug($data['title']);
            $data=$this->serviceService->createService($data);
            DB::commit();
            return redirect()->route('services.index')->with('success', 'Service created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating service. Please try again.');
        }
    }

    public function edit(Service $service)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Services', 'url' => route('services.index')],
            ['name' => 'Edit', 'url' => null]
        ];

        return view('admin.services.edit', compact('service', 'breadcrumbs'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $this->serviceService->updateService($service->id, $data);
            DB::commit();
            return redirect()->route('services.index')->with('success', 'Service updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error updating service. Please try again.');
        }
    }

    public function destroy(Service $service)
    {
        DB::beginTransaction();
        try {
            $this->serviceService->deleteService($service->id);
            DB::commit();
            return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting service. Please try again.');
        }
    }
}
