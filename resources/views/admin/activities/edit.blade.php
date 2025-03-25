@extends('admin.layouts.app')
@section('title', 'Edit Project Activity')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Edit Project Activity'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Edit Project Activity</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <form action="{{ route('activities.update', $activity->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="activity_name" class="form-label">Activity Name</label>
                                        <input type="text" id="activity_name" name="activity_name" class="form-control" value="{{ $activity->activity_name }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" name="description" class="form-control" rows="3">{{ $activity->description }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="project_id" class="form-label">Project</label>
                                        <select id="project_id" name="project_id" class="form-control" required>
                                            <option value="">Select Project</option>
                                            @foreach($projects as $project)
                                                <option value="{{ $project->id }}" {{ $activity->project_id == $project->id ? 'selected' : '' }}>{{ $project->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3 error-placeholder">
                                        <label class="form-label">Status</label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="active" {{ $activity->status == 'active' ? 'checked' : '' }}> Active
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="inactive" {{ $activity->status == 'inactive' ? 'checked' : '' }}> Inactive
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Activity</button>
                                    <a href="{{ route('activities.index') }}" class="btn btn-secondary">Back</a>
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
