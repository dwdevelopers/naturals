@extends('admin.layouts.app')

@section('title', 'Edit Download File')

@section('content')
<div class="content">
    <div class="container-fluid">
        @include('admin.layouts.partials.top', ['pageTitle' => 'Edit Download File'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Edit Download File</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form action="{{ route('downloads.update', $download->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" value="{{$download->name}}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="download_category_id" class="form-label">Download Category</label>
                                <select id="download_category_id" name="download_categories_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $download->download_categories_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('download_categories_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="existing-file" class="form-label">Current File</label><br>
                                <a href="{{ asset('storage/' . $download->path) }}" target="_blank">{{ $download->name }}</a>
                            </div>

                            <div class="mb-3">
                                <label for="file" class="form-label">Change File (optional)</label>
                                <input type="file" class="form-control" id="file" name="downloads" accept="image/*">
                                <small class="form-text text-muted">Leave blank if you don't want to replace the file.</small>
                            </div>

                            <div class="mb-3">
                                <label for="is_active" class="form-label">Status</label>
                                <select name="is_active" id="is_active" class="form-control">
                                    <option value="1" {{ $download->is_active ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ !$download->is_active ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('downloads.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
