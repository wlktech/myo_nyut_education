@extends('layouts.master')


@section('content')
<div class="container-fluid mt-3">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Total News & Events Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <a href="" class="card border-left-success shadow h-100 py-1 text-decoration-none">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total News & Events</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-blog fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Total Review Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <a href="" class="card border-left-primary shadow h-100 py-1 text-decoration-none">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Reviews</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-regular fa-comment fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <!-- Total Outstanding Students Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <a href="" class="card border-left-dark shadow h-100 py-1 text-decoration-none">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Outstanding Students</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
