@extends('admin.layouts.app')
@section('title', 'Edit Gallery')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Edit Gallery'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Edit Gallery</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="gallery_category_id" class="form-label">Gallery Category</label>
                                <select id="gallery_category_id" name="gallery_category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach($galleryCategories as $category)
                                    <option value="{{ $category->id }}" {{ $gallery->gallery_category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Gallery Title</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $gallery->title) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Current Image</label><br>
                                @foreach($gallery->images as $path)
                                <img src="{{ asset($path->image_path) }}" width="150" alt="Current Image">
                                @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="image_path" class="form-label">Upload New Images</label>
                                <input type="file" id="image_path" name="image_path[]" class="form-control" multiple accept="image/*">
                                <small class="form-text text-muted">
                                    Leave blank to keep the current image.
                                </small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status</label><br>
                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="is_active" value="active" {{ $gallery->is_active ? 'checked' : '' }}>
                                    Active
                                </label>
                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="is_active" value="inactive" {{ ! $gallery->is_active ? 'checked' : '' }}>
                                    Inactive
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('galleries.index') }}" class="btn btn-secondary">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
