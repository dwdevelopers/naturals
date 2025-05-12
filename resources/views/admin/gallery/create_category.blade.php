@extends('admin.layouts.app')
@section('title', 'Create Gallery Category')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Create Gallery Category'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Create Gallery Category</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('gallery-categories.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Category Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                            <a href="{{ route('gallery-categories.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
