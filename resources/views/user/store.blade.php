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
                                <h4>Point Store</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link bg-dark text-white active" data-bs-toggle="tab"
                                        href="#store">Store</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-dark text-white" data-bs-toggle="tab" href="#earned">Earned</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="store" class="container tab-pane active"><br>
                                    <div class="point-box border border-warning rounded text-center text-white p-2">
                                        You have <span class="badge bg-theme">0</span> Point
                                    </div>

                                    <div class="offers">
                                        <h5 class="text-start text-secondary fw-bold my-4">Latest Offers</h5>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <div class="position-realtive">
                                                        <span class="discount-badge">17%
                                                            OFF</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 d-flex flex-column justify-content-between">
                                                            <div class="offer-info p-3">
                                                                <h4 class="mt-5">Amazon Firestick</h4>
                                                                <span
                                                                    class="bg-dark text-white rounded-pill px-4 d-inline-flex align-items-center justify-content-start gap-2">
                                                                    <img src="{{ asset('assets/img/exclamationIconLight.svg') }}"
                                                                        alt="Icon">
                                                                    <p class="mb-0">75 RP</p>
                                                                </span>
                                                            </div>
                                                            <br>
                                                            <div class="offer-link p-3">
                                                                <a href="#"
                                                                    class="text-decoration-none text-dark">Redeem
                                                                    prize <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            <img src="{{ asset('/assets/img/firestick.webp') }}"
                                                                alt="Fire Stick" width="200px">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card bg-theme">
                                                <div class="card-body p-0">
                                                    <div class="position-realtive">
                                                        <span class="discount-badge">17%
                                                            OFF</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 d-flex flex-column justify-content-between">
                                                            <div class="offer-info p-3">
                                                                <h4 class="mt-5">Amazon Firestick</h4>
                                                                <span
                                                                    class="bg-dark text-white rounded-pill px-4 d-inline-flex align-items-center justify-content-start gap-2">
                                                                    <img src="{{ asset('assets/img/exclamationIconLight.svg') }}"
                                                                        alt="Icon">
                                                                    <p class="mb-0">75 RP</p>
                                                                </span>
                                                            </div>
                                                            <br>
                                                            <div class="offer-link p-3">
                                                                <a href="#"
                                                                    class="text-decoration-none text-dark">Redeem
                                                                    prize <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            <img src="{{ asset('/assets/img/firestick.webp') }}"
                                                                alt="Fire Stick" width="200px">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="offers">
                                        <h5 class="text-start text-secondary fw-bold my-4">ALL PRIZES</h5>
                                    </div>
                                    <div class="row">
                                        @forelse ($products as $item)
                                            <div class="col-md-3 ">
                                                <div class="card mb-3">
                                                    <div class="card-body d-flex justify-content-between">
                                                        <div class="prize-info">
                                                            <h3>{{ $item->title }}</h3>
                                                            <span
                                                                class="bg-dark mb-4 text-white rounded-pill px-4 d-inline-flex align-items-center justify-content-start gap-2">
                                                                <img src="{{ asset('assets/img/exclamationIconLight.svg') }}"
                                                                    alt="Icon">
                                                                <p class="mb-0">{{ $item->coin }} Coins</p>
                                                            </span>
                                                        </div>
                                                        <div class="prize-img">
                                                            <img src="{{ asset('product/' . $item->image) }}" alt="Credit"
                                                                width="70px">
                                                        </div>
                                                    </div>
                                                </div>
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
