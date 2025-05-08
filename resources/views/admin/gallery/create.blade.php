@extends('admin.layouts.app')
@section('title', 'Create Gallery')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Create Gallery'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Create New Gallery</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="gallery_category_id" class="form-label">Gallery Category</label>
                                <select id="gallery_category_id" name="gallery_category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach($galleryCategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Gallery Title</label>
                                <input type="text" id="title" name="title" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Images</label>
                                <input type="file" id="image_path" name="image_path[]" class="form-control" multiple accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="is_active" value="active" checked> Active
                                </label>
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="is_active" value="inactive"> Inactive
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                            <a href="{{ route('galleries.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
