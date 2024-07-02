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
                                <li class="breadcrumb-item" aria-current="page">Lottery</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="mb-0">All Lotteries</h2>
                                <a href="{{ route('Admin.Add.Product') }}" class="btn btn-primary">Add New</a>
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
                                        <th>Title</th>
                                        <th>Coins</th>
                                        <th>Image</th>
                                        <th>Added Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($stores as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->coins }}</td>
                                            <td>
                                                <img src="{{ asset('products/' . $item->image) }}"
                                                    style="width: 50px;height: 50px;border-radius: 50%;">
                                            </td>
                                            <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger">Del</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <h3>Empty</h3>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <th>Title</th>
                                    <th>Coins</th>
                                    <th>Image</th>
                                    <th>Added Date</th>
                                    <th>Action</th>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
