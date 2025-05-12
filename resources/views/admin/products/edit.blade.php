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
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label"> Image</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                        @if($product->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="Image" width="150">
                                        </div>
                                        @endif
                                    </div>
                                    <!-- Description -->
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" name="description" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>
                                    </div>
                                    <!-- Status -->
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="active" {{ $product->status == 'active' ? 'checked' : '' }}> Active
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="inactive" {{ $product->status == 'inactive' ? 'checked' : '' }}> Inactive
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
