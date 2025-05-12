@extends('admin.layouts.app')
@section('title', 'Edit Gallery Category')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Edit Gallery Category'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Edit Gallery Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('gallery-categories.update', $galleryCategory->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Category Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $galleryCategory->name }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('gallery-categories.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
