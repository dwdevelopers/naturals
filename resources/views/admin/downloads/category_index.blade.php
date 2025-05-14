@extends('admin.layouts.app')
@section('title', 'Download Categories')

@section('content')
<div class="content">
    <div class="container-fluid">
        @include('admin.layouts.partials.top', ['pageTitle' => 'Download Categories'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Download Categories</h4>
                    </div>

                    <div class="d-flex justify-content-end m-2">
                        <a href="{{ route('download-categories.create') }}" class="btn btn-primary">Add Category</a>
                    </div>

                    <div class="card-body">
                        <table id="datatables-categories" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->
    </div> <!-- container -->
</div> <!-- content -->
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/downloadCategory.js') }}"></script>
@endpush
