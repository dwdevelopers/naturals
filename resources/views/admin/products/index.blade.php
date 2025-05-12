@extends('admin.layouts.app')
@section('title', 'Product')
<style>
    table th,
    table td {
        display: table-cell !important;
        white-space: normal !important;
        /* Allow text wrapping */
        word-wrap: break-word;
        /* Ensures long words break */
        overflow-wrap: break-word;
        /* Ensures text wraps in all cases */
        max-width: 200px;
        /* Adjust as needed to prevent excessive width */
    }

</style>
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        @include('admin.layouts.partials.top', ['pageTitle' => 'Product'])
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Product</h4>
                    </div>

                    <div class="d-flex justify-content-end m-2">
                        <a href="{{route('products.create')}}" class="btn btn-primary">Add Product</a>
                    </div>

                    <div class="card-body">
                        <table id="datatables-products" class="table table-striped dt-responsive nowrap w-100" data-url="{{ route('products.index') }}">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Status</th>
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
<script src="{{ asset('js/product.js') }}"></script>

@endpush
