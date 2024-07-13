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
                                <li class="breadcrumb-item" aria-current="page">Coins Transcations</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="mb-0">Pending Coin Transcations</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end -->
            <div class="row"><!-- [ sample-page ] start -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="dataTable" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>TID</th>
                                        <th>Screen_Shot</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transcation as $item)
                                        <tr>
                                            <td>{{ $item->user_id }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->tid }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <img src="{{ asset('screen_shot/' . $item->image) }}"
                                                    class="img-fluid image-zoom-sm"
                                                    style="width: 50px;height: 50px;border-radius: 50%;">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"
                                                        aria-hidden="true"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"
                                                        aria-hidden="true"></i>
                                                </a>
                                                <a href="#" class="btn btn-warning btn-sm"><i
                                                        class="fa fa-address-card" aria-hidden="true"></i>

                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <h3>Empty</h3>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Added Date</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
