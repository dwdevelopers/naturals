<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\ProductDetailsService;
use App\Http\Requests\ProductDetailsRequest;

use App\Models\ProductDetails;
use Yajra\DataTables\Facades\DataTables;

class ProductDetailsController extends Controller
{
    protected $productService;
    protected $productDetailsService;

    public function __construct(ProductService $productService,ProductDetailsService $productDetailsService)
    {
        $this->middleware('auth');
        $this->productService = $productService;
        $this->productDetailsService=$productDetailsService;
    }

    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Product Details', 'url' => route('product-details.index')],
            ['name' => 'Lists', 'url' => null]
        ];

        if ($request->ajax()) {
            $products = $this->productDetailsService->getAllProductDetails();

            return DataTables::of($products)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    return $row->name;

                })
                ->addColumn('product', function ($row) {
                    return $row->product->name;

                })
                ->addColumn('status', function ($row) {
                    return ($row->status === 'active')
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-danger">Inactive</span>';
                })

                ->addColumn('action', function ($row) {
                    return '<a href="'.route('product-details.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('product-details.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        return view('admin.details.index', compact('breadcrumbs'));
    }
    public function create()
    {
        // Define breadcrumbs for the create page
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Product Details', 'url' => route('product-details.index')],
            ['name' => 'Create', 'url' => null] // Current page
        ];
        $products = $this->productService->getAllProducts();
        return view('admin.details.create', compact('breadcrumbs','products'));
    }
    public function store(ProductDetailsRequest $request)
    {

        DB::beginTransaction();
        try {
            $data = $request->validated();
            $data['slug'] = ProductDetails::generateUniqueSlug($data['name']);
            $productDetail = $this->productDetailsService->createProductDetail($data);

            DB::commit();
            return redirect()->route('product-details.index')->with('success', 'Product details saved successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error saving product details. Please try again.');
        }
    }

    public function edit(ProductDetails $productDetail)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Product Details', 'url' => route('product-details.index')],
            ['name' => 'Edit', 'url' => null] // Current page
        ];
        $products = $this->productService->getAllProducts();
        return view('admin.details.edit', compact('productDetail','breadcrumbs','products'));
    }

    public function update(ProductDetailsRequest $request, ProductDetails $productDetail)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $this->productDetailsService->updateProductDetail($productDetail->id, $data);
            DB::commit();
            return redirect()->route('product-details.index')->with('success', 'Product details updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error updating product details. Please try again.');
        }
    }

    public function destroy(ProductDetails $productDetail)
    {
        DB::beginTransaction();
        try {
            $this->productDetailsService->deleteProductDetail($productDetail->id);
            DB::commit();
            return redirect()->route('product-details.index')->with('success', 'Product details deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting product details. Please try again.');
        }
    }
}
