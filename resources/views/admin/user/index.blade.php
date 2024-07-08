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
                                <li class="breadcrumb-item" aria-current="page">Users</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="mb-0">All Users</h2>
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
                                        <th>Name</th>
                                        <th>Balance</th>
                                        <th>Email</th>
                                        <th>Referral</th>
                                        <th>Register Date</th>
                                        <th>Country</th>
                                        <th>Province</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ number_format($item->balance) }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->referral }}</td>
                                            <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                            <td>{{ $item->country }}</td>
                                            <td>{{ $item->province }}</td>
                                            <td>{{ $item->city }}</td>
                                            <td>
                                                <a href="{{ route('Admin.Edit.User', $item->id) }}"
                                                    class="btn btn-sm btn-info">Edit</a>
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
