@extends('admin.layouts.app')
@section('title', 'Edit Project')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Edit Project'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Edit Project</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Project Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $project->name) }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" name="description" class="form-control" rows="3">{{ old('description', $project->description) }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="additional_info" class="form-label">Additional Info</label>
                                        <textarea id="additional_info" name="additional_info" class="form-control" rows="3">{{ old('additional_info', $project->additional_info) }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label"> Image</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                        @if($project->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $project->image) }}" alt="Image" width="150">
                                        </div>
                                        @endif
                                    </div>
                                    <div class="mb-3 error-placeholder">
                                        <label class="form-label">Status</label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="active" {{ $project->status == 'active' ? 'checked' : '' }}> Active
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="inactive" {{ $project->status == 'inactive' ? 'checked' : '' }}> Inactive
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Project</button>
                                    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back</a>
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
