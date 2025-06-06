@extends('admin.layouts.app')
@section('title', 'Subscriptions')
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        @include('admin.layouts.partials.top', ['pageTitle' => 'Subscriptions'])
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Manage Subscriptions</h4>
                    </div>

                    <div class="card-body">
                        <table id="datatables-subscriptions" class="table table-striped dt-responsive nowrap w-100" data-url="{{ route('subscriptions.index') }}">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Subscribed At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- Subscription records will be populated here via AJAX -->
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
<script src="{{ asset('js/subscriptions.js') }}"></script>
@endpush
