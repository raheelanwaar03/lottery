@extends('layouts.app')

@section('content')
    <section id="hero-section" class="py-5 d-flex justify-content-center align-items-end align-items-md-center px-4 px-md-5 ">
        <div class="container-fluid text-center text-md-start">
            <span class="badge bg-dark mt-5"><img src="{{ asset('assets/img/crown.svg') }}" alt="Crown"> JACKPOT DRAW</span>
            <h1 class="text-white responsive-heading fw-bold">WIN A MERCEDES GLC AMG <br> LINE + PRIZE BUNDLE!</h1>
            <h1 class="text-gradient-theme mb-4">£0.50</h1>
            <a href="#" class="btn fw-bold text-uppercase bg-gradient-theme px-5">Enter
                now</a>
        </div>
    </section>

    <section class="bg-theme-dark py-5 d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-4 p-0 px-2">
                    <div class="card bg-theme-dark" style="border: 1px solid gray;">
                        <div class="card-body py-1 text-center text-white">
                            <i class="bi bi-gift fs-1 text-gradient-theme"></i>
                            <h6 class="mb-0">$17.3</h6>
                            <p class="mb-0" style="font-size:12px;">won in prizes</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-0 px-2">
                    <div class="card bg-theme-dark" style="border: 1px solid gray;">
                        <div class="card-body py-1 text-center text-white">
                            <i class="bi bi-trophy fs-1 text-gradient-theme"></i>
                            <h6 class="mb-0">$17.3</h6>
                            <p class="mb-0" style="font-size:12px;">won in prizes</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-0 px-2">
                    <div class="card bg-theme-dark" style="border: 1px solid gray;">
                        <div class="card-body py-1 text-center text-white">
                            <i class="bi bi-patch-check fs-1 text-gradient-theme"></i>
                            <h6 class="mb-0">$17.3</h6>
                            <p class="mb-0" style="font-size:12px;">won in prizes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="competition" class="bg-theme-dark py-5">
        <div class="container">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner overflow-visible">
                    <div class="carousel-item active">
                        <div class="competion-box postion-relative">
                            <img src="{{ asset('assets/img/competition/1.webp') }}" alt="Los Angeles" class="d-block"
                                width="100%">
                            <div class="card bg-theme-dark info-card-container">
                                <div class="card-body">
                                    <h2>£20k Ninja Instant Win Raffle</h2>
                                    <div class="progress w-100 bg-dark" style="height: 10px;">
                                        <div class="progress bg-theme w-75" style="height: 10px;"></div>
                                    </div>
                                    <small>2633 tickets sold</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="competion-box postion-relative">
                            <img src="{{ asset('assets/img/competition/2.webp') }}" alt="Los Angeles" class="d-block"
                                width="100%">
                            <div class="card bg-theme-dark info-card-container">
                                <div class="card-body">
                                    <h2>£20k Ninja Instant Win Raffle</h2>
                                    <div class="progress w-100 bg-dark" style="height: 10px;">
                                        <div class="progress bg-theme w-75" style="height: 10px;"></div>
                                    </div>
                                    <small>2633 tickets sold</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="competion-box postion-relative">
                            <img src="{{ asset('assets/img/competition/3.webp') }}" alt="Los Angeles" class="d-block"
                                width="100%">
                            <div class="card bg-theme-dark info-card-container">
                                <div class="card-body">
                                    <h2>£20k Ninja Instant Win Raffle</h2>
                                    <div class="progress w-100 bg-dark" style="height: 10px;">
                                        <div class="progress bg-theme w-75" style="height: 10px;"></div>
                                    </div>
                                    <small>2633 tickets sold</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <section class="bg-theme-dark py-5 d-none d-md-block">
        <div class="container">
            <div class="card bg-theme-secondary text-white">
                <div class="card-body">
                    <div class="d-md-flex">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="left-text text-center text-md-start" style="width: 300px">
                                <h4>£ 16.4 Million</h4>
                                <h6>won in prizes so far</h6>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-6 mb-4 mb-md-0 col-md-3 p-0">
                                <div class="d-flex gap-2 gap-md-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0 small-text">230,396 raffle winners and counting</h6>
                                </div>
                            </div>
                            <div class="col-6 mb-4 mb-md-0 col-md-3 p-0">
                                <div class="d-flex gap-2 gap-md-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0 small-text">230,396 raffle winners and counting</h6>
                                </div>
                            </div>
                            <div class="col-6 mb-4 mb-md-0 col-md-3 p-0">
                                <div class="d-flex gap-2 gap-md-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0 small-text">230,396 raffle winners and counting</h6>
                                </div>
                            </div>
                            <div class="col-6 mb-4 mb-md-0 col-md-3 p-0">
                                <div class="d-flex gap-2 gap-md-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0 small-text">230,396 raffle winners and counting</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-theme-dark">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <div class="left-content d-md-flex align-items-center gap-3">
                    <h3 class="fw-bold text-white text-center text-md-start mb-4">LIVE RAFFLES</h3>
                    <div class="d-flex justify-content-around">
                        <div class="badge bg-dark mb-3 mb-md-0 px-1 py-0 border border-1 pe-4 rounded-pill">
                            <div class="d-flex gap-0 align-items-center ">
                                <i class="bi bi-dot text-warning " style="font-size: 30px;"></i>
                                <p class="mb-0"> 0 active raffles</p>
                            </div>
                        </div>
                        <div class="badge bg-dark mb-3 mb-md-0 px-1 py-0 border border-1 pe-4 rounded-pill">
                            <div class="d-flex gap-0 align-items-center ">
                                <i class="bi bi-dot text-danger " style="font-size: 30px;"></i>
                                <p class="mb-0"> 0 ending soon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center py-3 gap-3 overflow-auto">
                    <div class="badge bg-dark">All</div>
                    <div class="badge bg-dark">Cash</div>
                    <div class="badge bg-dark">Tech</div>
                    <div class="badge bg-dark">Car</div>
                    <div class="badge bg-dark">Holiday</div>
                    <div class="badge bg-dark">Other</div>
                </div>
            </div>
            <div class="row mt-5">
                @forelse ($lotteries as $item)
                    <div class="col-6 col-md-3 mb-5">
                        <div class="card bg-theme-secondary position-relative">
                            <div class="position-absolute"
                                style="top:-25px; width: 80%; left: 50%; transform: translateX(-50%);">
                                <div class="bg-light rounded-pill text-center py-1 text-dark fs-7 fw-bold shadow">Draw
                                    Monday 10pm</div>
                            </div>
                            <img src="{{ asset('assets/img/games/1.webp') }}" alt="Game Image" width="100%">
                            <div class="card-body text-white ">
                                <h4 class="text-center fs-6">Win a Ninja 12in1 Multicooker</h4>
                                <small class="text-start" style="font-size: 12px;">25% Sold</small>
                                <div class="progress-bar bg-dark poisition-relative">
                                    <div class="poisition-relative">
                                        <div class="bg-theme" style="width: 25%; padding: 2px"></div>
                                        <div class="position-absolute" style="bottom: 61px; left: 60px">
                                            <i class="bi bi-dot d-none d-md-block text-warning fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons mt-4">
                                    <a href="#"
                                        class="btn btn-sm btn-md-lg bg-gradient-theme px-3 fw-bold w-100">Enter
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3 class="text-center text-white">Empty</h3>
                @endforelse
            </div>

        </div>
    </section>
@endsection
