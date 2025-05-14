@extends('admin.layouts.app')
@section('title', 'Product Details')
<style>
    table th,
    table td {
        display: table-cell !important;
        white-space: normal !important;
        word-wrap: break-word;
        overflow-wrap: break-word;
        max-width: 200px;
    }

</style>
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('admin.layouts.partials.top', ['pageTitle' => 'Product Details'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Product Details</h4>
                    </div>

                    <div class="d-flex justify-content-end m-2">
                        <a href="{{route('product-details.create')}}" class="btn btn-primary">Add Sub Product</a>
                    </div>

                    <div class="card-body">
                        <table id="datatables-details" class="table table-striped dt-responsive nowrap w-100" data-url="{{ route('product-details.index') }}">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Category</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
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
<script src="{{ asset('js/details.js') }}"></script>
@endpush
