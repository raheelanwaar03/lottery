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
                                <h4>Coins Store</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="store" class="container tab-pane active"><br>
                                    <div class="point-box border border-warning rounded text-center text-white p-2">
                                        You have <span class="badge bg-theme">{{ $user_coins }}</span> Coin
                                    </div>
                                    <div class="offers">
                                        <h5 class="text-start text-secondary fw-bold my-4">Coin Ads</h5>
                                    </div>
                                    <div class="row">
                                        @forelse ($coins as $item)
                                            <div class="col-md-3"
                                                title="Buy {{ $item->qty }} Coins in Just {{ $item->price }}">
                                                <a href="{{ route('User.Buy.Coins', $item->id) }}"
                                                    class="text-decoration-none">
                                                    <div class="card bg-warning mb-3">
                                                        <div class="card-body d-flex justify-content-between">
                                                            <div class="prize-info">
                                                                <h3 class="text-dark">{{ $item->price }} PKR</h3>
                                                                <span
                                                                    class="bg-dark mb-4 text-white rounded-pill px-4 d-inline-flex align-items-center justify-content-start gap-2">
                                                                    <img src="{{ asset('assets/img/cred.webp') }}"
                                                                        height="20px" width="20px" alt="Icon">
                                                                    <p class="mb-0">{{ $item->qty }} Coins</p>
                                                                </span>
                                                            </div>
                                                            <div class="prize-img">
                                                                <img src="{{ asset('assets/img/cred.webp') }}"
                                                                    alt="Credit" width="70px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @empty
                                            <h3 class="text-center text-white">Datebase is Empty :)</h3>
                                        @endforelse
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
