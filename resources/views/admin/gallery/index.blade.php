@extends('admin.layouts.app')
@section('title', 'Gallery')

@section('content')
<div class="content">
    <div class="container-fluid">
        @include('admin.layouts.partials.top', ['pageTitle' => 'Gallery'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="header-title">Gallery</h4>
                        <a href="{{ route('galleries.create') }}" class="btn btn-primary">Add Image</a>
                    </div>

                    <div class="card-body">
                        <table id="datatables-gallery" class="table table-bordered table-striped w-100"
                            data-url="{{ route('galleries.index') }}">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- DataTables loads via JS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/gallery.js') }}"></script>

@endpush
