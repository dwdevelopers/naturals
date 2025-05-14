<!-- resources/views/admin/files/create.blade.php -->
@extends('admin.layouts.app')

@section('title', 'Upload File')

@section('content')
<div class="content">
    <div class="container-fluid">
        @include('admin.layouts.partials.top', ['pageTitle' => 'Upload File'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Upload File</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form action="{{ route('downloads.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="download_category_id" class="form-label">Download Category</label>
                                <select id="download_category_id" name="download_categories_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('gallery_category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">Choose File</label>
                                <input type="file" class="form-control" id="file" name="downloads" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Upload</button>
                            <a href="{{ route('downloads.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
