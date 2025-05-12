@extends('admin.layouts.app')
@section('title', 'Edit Service')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Edit Service'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Edit Service</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('services.update', $service->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label">Service Title</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $service->title) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea id="short_description" name="short_description" class="form-control" rows="2">{{ old('short_description', $service->short_description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="4" required>{{ old('description', $service->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status</label><br>
                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="is_active" value="1" {{ old('is_active', $service->is_active) == 1 ? 'checked' : '' }}> Active
                                </label>
                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="is_active" value="0" {{ old('is_active', $service->is_active) == 0 ? 'checked' : '' }}> Inactive
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Service</button>
                            <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
