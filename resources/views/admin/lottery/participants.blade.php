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
                                <li class="breadcrumb-item" aria-current="page">Participants</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="mb-0">All Participants</h2>
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
                                        <th>Lottery ID</th>
                                        <th>User Name</th>
                                        <th>Ticket Qty</th>
                                        <th>Ticket Price</th>
                                        <th>Total Price</th>
                                        <th>Added Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($participants as $item)
                                        <tr>
                                            <td>{{ $item->lottery_id }}</td>
                                            <td>{{ $item->user_name }}</td>
                                            <td>{{ $item->ticket_qty }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->total_price }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <a href="{{ route('Admin.Make.Winner', $item->user_name) }}"
                                                    class="btn btn-sm btn-info">Make Winner</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <h3>Empty</h3>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Lottery ID</th>
                                        <th>User Name</th>
                                        <th>Ticket Qty</th>
                                        <th>Ticket Price</th>
                                        <th>Total Price</th>
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
