<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Subscription;
use Carbon\Carbon;


class AdminSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Contact Us', 'url' => route('contactuses.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
            ];
            $teams =Subscription::get();
            if ($request->ajax()) {


                return DataTables::of($teams)
                    ->addIndexColumn()
                    ->addColumn('created_at', function($row) {
                        // Format the date to something more readable
                        return Carbon::parse($row->created_at)->format('d M Y, h:i A');
                    })
                    ->addColumn('action', function ($row) {

                        return '
                                <form action="'.route('subscriptions.destroy', $row->id).'" method="POST" style="display:inline;">
                                    '.csrf_field().'
                                    '.method_field("DELETE").'
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>';
                    })
                    ->rawColumns(['action']) // Allows HTML rendering in the action column
                    ->make(true);
            }
        return view('admin.subscription.index',compact('breadcrumbs'));
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
    public function destroy($id)
    {
        $subscription = Subscription::findOrFail($id);
        $subscription->delete();

        return redirect()->back()->with('success', 'Subscription successfully deleted!');
    }
}
