<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\CategoryService;
use App\Http\Requests\ProductRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUploadTrait;

class ProductController extends Controller
{
    use ImageUploadTrait;

    protected $productService;
    protected $categoryService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->middleware('auth');

        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        // Define breadcrumbs for the index page
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Products', 'url' => route('products.index')],
            ['name' => 'Lists', 'url' => null] // Current page
        ];

        if ($request->ajax()) {
            $products = $this->productService->getAllProducts();

            return DataTables::of($products)
                ->addIndexColumn()
                ->addColumn('category', function ($row) {
                    return $row->category ? $row->category->name : 'N/A';
                })
                ->addColumn('image', function ($row) {
                    $firstImage = $row->images->first(); // Get the first image
                    if ($firstImage) {
                        $imageUrl = asset('storage/' . $firstImage->image);
                        return '<img src="' . $imageUrl . '" alt="Product Image" width="50" height="50" />';
                    }
                    return '';
                })
                ->addColumn('status', function ($row) {
                    return $row->status 
                        ? '<span class="badge bg-success">Active</span>' 
                        : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('products.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('products.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action', 'image', 'status'])
                ->make(true);
        }

        return view('admin.products.index', compact('breadcrumbs'));
    }

    public function create()
    {
        // Define breadcrumbs for the create page
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Products', 'url' => route('products.index')],
            ['name' => 'Create', 'url' => null] // Current page
        ];
        $categories = $this->categoryService->getAllCategories();
        return view('admin.products.create', compact('categories', 'breadcrumbs'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $data['slug'] = Product::generateUniqueSlug($data['name']);
            $product = $this->productService->createProduct($data);

            // Handle multiple image uploads
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $path = $this->uploadImage($image, 'products');

                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => $path
                    ]);
                }
            }

            DB::commit();
            return redirect()->route('products.index')->with('success', 'Product created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating product. Please try again.');
        }
    }

    public function edit(Product $product)
    {
        // Define breadcrumbs for the edit page
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Products', 'url' => route('products.index')],
            ['name' => 'Edit', 'url' => null] // Current page
        ];
        $categories = $this->categoryService->getAllCategories();
        return view('admin.products.edit', compact('product', 'categories', 'breadcrumbs'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $data['category_id'] = $request->category_id;

            // Update Product
            $this->productService->updateProduct($product->id, $data);

            // Handle image updates
            if ($request->hasFile('image')) {
                // Delete old images
                foreach ($product->images as $image) {
                    Storage::disk('public')->delete($image->image);
                    $image->delete();
                }

                // Upload new images
                foreach ($request->file('image') as $image) {
                    $path = $this->uploadImage($image, 'products');

                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => $path
                    ]);
                }
            }

            DB::commit();
            return redirect()->route('products.index')->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error updating product. Please try again.');
        }
    }

    public function destroy(Product $product)
    {
        DB::beginTransaction();
        try {
            // Delete associated images
            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image->image);
                $image->delete();
            }

            // Delete Product
            $this->productService->deleteProduct($product->id);

            DB::commit();
            return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting product. Please try again.');
        }
    }
}
