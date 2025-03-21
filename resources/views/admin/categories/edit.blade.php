@extends('admin.layouts.app')
@section('title', 'Edit Category')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Edit Category'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Edit Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH') <!-- Using PATCH for update -->

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Category Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $category->name) }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="details" class="form-label">Description</label>
                                        <textarea id="details" name="details" class="form-control" rows="3">{{ old('details', $category->details) }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Category Image</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                        @if($category->image)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" width="100">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mb-3 error-placeholder">
                                        <label class="form-label">Status</label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="1" {{ $category->status == 1 ? 'checked' : '' }}> Active
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="0" {{ $category->status == 0 ? 'checked' : '' }}> Inactive
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-success">Update Category</button>
                                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
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
