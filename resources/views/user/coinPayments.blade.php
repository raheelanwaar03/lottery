@extends('layouts.app')

@section('content')
    <section id="cart" class="bg-theme-dark pb-5">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 my-5">
                            <div class="d-flex justify-content-between align-items-center text-white">
                                <i class="bi bi-arrow-left fs-3"></i>
                                <h4>Coin Payments</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="store" class="container tab-pane active"><br>
                                    <div class="point-box border border-warning rounded text-center text-white p-2">
                                        You have <span class="badge bg-theme">0</span> Coin
                                    </div>
                                    <div class="offers">
                                        <h5 class="text-start text-secondary fw-bold my-4">All Transcations</h5>
                                    </div>
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="thead-warning">
                                                    <tr class="table-warning">
                                                        <th scope="col">#</th>
                                                        <th scope="col">Coins</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">TID</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($coins as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->qty }}</td>
                                                            <td>{{ $item->price }}</td>
                                                            <td>{{ $item->tid }}</td>
                                                            <td>
                                                                @if ($item->status == 'pending')
                                                                    <span class="badge bg-warning">Pending</span>
                                                                @else
                                                                    <span class="badge bg-success">Approved</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <h3 class="text-center text-white">Datebase is Empty :)</h3>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="earned" class="container tab-pane fade"><br>
                                    <div class="point-box border border-warning rounded text-center text-white p-2">
                                        You have <span class="badge bg-theme">0</span> Point
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
