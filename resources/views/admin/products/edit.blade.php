@extends('admin.layouts.app')
@section('title', 'Edit Product')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Edit Product'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <!-- Product Name -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Product Name</label>
                                        <input type="text" id="name" name="name" class="form-control" 
                                            value="{{ old('name', $product->name) }}" required>
                                    </div>

                                    <!-- Description -->
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" name="description" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>
                                    </div>

                                    <!-- Price -->
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" id="price" name="price" class="form-control" step="0.01" 
                                            value="{{ old('price', $product->price) }}" required>
                                    </div>

                                    <!-- Category -->
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <select id="category" name="category_id" class="form-control" required>
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Product Images -->
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Product Images</label>
                                        <input type="file" class="form-control" id="image" name="image[]" accept="image/*" multiple>
                                        @if($product->images->isNotEmpty())
                                            <div class="mt-2">
                                                @foreach($product->images as $img)
                                                    <img src="{{ asset('storage/' . $img->image) }}" alt="Product Image" width="50" height="50" class="me-2">
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Status -->
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="1" 
                                                {{ $product->status == 1 ? 'checked' : '' }}> Active
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="0" 
                                                {{ $product->status == 0 ? 'checked' : '' }}> Inactive
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Product</button>
                                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
