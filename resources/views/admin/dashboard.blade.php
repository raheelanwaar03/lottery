@extends('admin.layout.app')

@section('content')
    <div class="pc-container">
        <div class="pc-content"><!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('Admin.Dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Admin dashbard</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end -->
            <div class="row"><!-- [ sample-page ] start -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-1">$30200</h3>
                                    <p class="text-muted mb-0">All Earnings</p>
                                </div>
                                <div class="col-4 text-end"><i class="ti ti-chart-bar text-secondary f-36"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-1">145</h3>
                                    <p class="text-muted mb-0">Task</p>
                                </div>
                                <div class="col-4 text-end"><i class="ti ti-calendar-event text-danger f-36"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-1">290+</h3>
                                    <p class="text-muted mb-0">Page Views</p>
                                </div>
                                <div class="col-4 text-end"><i class="ti ti-file-text text-success f-36"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-1">500</h3>
                                    <p class="text-muted mb-0">Downloads</p>
                                </div>
                                <div class="col-4 text-end"><i class="ti ti-download text-primary f-36"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                            <h4 class="mb-3">78,250 <span class="badge bg-light-success border border-success"><i
                                        class="ti ti-trending-up"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
                            <h4 class="mb-3">18,800 <span class="badge bg-light-warning border border-warning"><i
                                        class="ti ti-trending-down"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
                            <h4 class="mb-3">$35,078 <span class="badge bg-light-danger border border-danger"><i
                                        class="ti ti-trending-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
