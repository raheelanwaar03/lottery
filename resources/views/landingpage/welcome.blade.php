@extends('layouts.app')

@section('links')
    <style>
        .featured {
            width: 100%;
            height: 520px;
        }

        .img-same {
            width: 100%;
            height: 280px;
        }

        @media only screen and (max-width: 400px) {
            .featured {
                width: 100%;
                height: 300px;
            }

            .slide {
                margin-bottom: -25px;
            }

            .img-same {
                height: 186px;
                width: 100%;
            }
        }
    </style>
@endsection

@section('content')
    <section id="hero-section" class="py-5 d-flex justify-content-center align-items-end align-items-md-center px-4 px-md-5 ">
        <div class="container-fluid text-center text-md-start"><span class="badge bg-dark mt-5"><img
                    src="{{ asset('assets/img/crown.svg') }}" alt="Crown">JACKPOT DRAW</span>
            <h1 class="text-white responsive-heading fw-bold">WIN A MERCEDES GLC AMG <br>LINE+PRIZE BUNDLE !</h1>
            <h1 class="text-gradient-theme mb-4">500 PKR</h1><a href="#"
                class="btn fw-bold text-uppercase bg-gradient-theme px-5">Enter now</a>
        </div>
    </section>
    <section class="bg-theme-dark py-5 d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-4 p-0 px-2">
                    <div class="card bg-theme-dark" style="border: 1px solid gray;">
                        <div class="card-body py-1 text-center text-white"><i
                                class="bi bi-gift fs-1 text-gradient-theme"></i>
                            <h6 class="mb-0">200 PKR</h6>
                            <p class="mb-0" style="font-size:12px;">won in prizes</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-0 px-2">
                    <div class="card bg-theme-dark" style="border: 1px solid gray;">
                        <div class="card-body py-1 text-center text-white"><i
                                class="bi bi-trophy fs-1 text-gradient-theme"></i>
                            <h6 class="mb-0">200 PKR</h6>
                            <p class="mb-0" style="font-size:12px;">won in prizes</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-0 px-2">
                    <div class="card bg-theme-dark" style="border: 1px solid gray;">
                        <div class="card-body py-1 text-center text-white"><i
                                class="bi bi-patch-check fs-1 text-gradient-theme"></i>
                            <h6 class="mb-0">200 PKR</h6>
                            <p class="mb-0" style="font-size:12px;">won in prizes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="brands" class="py-2 d-none d-md-block">
        <div class="scroll-area"><?php
        $loop = 0;
        for ($i = 1; $i < 22; $i++) {
            if ($i == 21) {
                $i = 1;
                $loop++;
            }
            if ($loop == 5) {
                $i = 22;
            }
            ?> <img src="{{ asset('assets/img/brands/1.png') }}" alt="Brand"
                class="me-4" width="50" <?php echo $i; ?>><?php
        }
        ?> </div>
    </section>
    <section id="competition" class="bg-theme-dark py-3">
        <div class="container">
            <div class="row">
                <h3 class="text-white">FEATURED JACKPOTS</h3>
            </div>
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner overflow-visible">
                    @forelse ($items as $item)
                        <div class="carousel-item {{ $item->id == 1 ? 'active' : '' }}">
                            <div class="competion-box">
                                <a href="{{ route('Featured.Product.Details', $item->id) }}">
                                    <img src="{{ asset('featured/' . $item->picture) }}" class="d-block featured"
                                        style="border-radius: 10px;">
                                </a>
                                <div class="card bg-theme-dark bg-transparent text-clear" style="margin-top:-60px;">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <p class="text-white fw-bolder" style="color:white">{{ $item->title }}</p>
                                        <p class="text-danger">5 days</p><a href="{{ route('Product.Details', $item->id) }}"
                                            class="btn btn-warning" style="margin-top: -10px">Enter Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3>Null</h3>
                    @endforelse
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev"><span
                        class="carousel-control-prev-icon"></span></button><button class="carousel-control-next"
                    type="button" data-bs-target="#demo" data-bs-slide="next"><span
                        class="carousel-control-next-icon"></span></button>
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
                                <h4>15 Million Rupees</h4>
                                <h6>won in prizes so far</h6>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-6 mb-4 mb-md-0 col-md-3 p-0">
                                <div class="d-flex gap-2 gap-md-4"><i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0 small-text">230,
                                        396 raffle winners and counting</h6>
                                </div>
                            </div>
                            <div class="col-6 mb-4 mb-md-0 col-md-3 p-0">
                                <div class="d-flex gap-2 gap-md-4"><i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0 small-text">230,
                                        396 raffle winners and counting</h6>
                                </div>
                            </div>
                            <div class="col-6 mb-4 mb-md-0 col-md-3 p-0">
                                <div class="d-flex gap-2 gap-md-4"><i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0 small-text">230,
                                        396 raffle winners and counting</h6>
                                </div>
                            </div>
                            <div class="col-6 mb-4 mb-md-0 col-md-3 p-0">
                                <div class="d-flex gap-2 gap-md-4"><i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0 small-text">230,
                                        396 raffle winners and counting</h6>
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
                            <div class="d-flex gap-0 align-items-center "><i class="bi bi-dot text-warning "
                                    style="font-size: 30px;"></i>
                                <p class="mb-0">{{ lotteries() }} active raffles</p>
                            </div>
                        </div>
                        <div class="badge bg-dark mb-3 mb-md-0 px-1 py-0 border border-1 pe-4 rounded-pill">
                            <div class="d-flex gap-0 align-items-center "><i class="bi bi-dot text-danger "
                                    style="font-size: 30px;"></i>
                                <p class="mb-0">2 ending soon</p>
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
                @forelse ($lotteries as $lottery)
                    <div class="col-6 col-md-3 mb-5">
                        <div class="card bg-theme-secondary position-relative">
                            <div class="position-absolute"
                                style="top:-25px; width: 80%; left: 50%; transform: translateX(-50%);">
                                <div class="bg-light rounded-pill text-center py-1 text-dark fs-7 fw-bold shadow">
                                    <div id="countdown{{ $lottery->id }}"></div>
                                    <script>
                                        function startCountdown(days) {
                                            const countdownElement = document.getElementById('countdown{{ $lottery->id }}');
                                            const endDate = new Date().getTime() + days * 24 * 60 * 60 * 1000;

                                            function updateCountdown() {
                                                const now = new Date().getTime();
                                                const distance = endDate - now;
                                                if (distance < 0) {
                                                    clearInterval(interval);
                                                    countdownElement.innerHTML = "Countdown Ended";
                                                    return;
                                                }
                                                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                                countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
                                            }
                                            const interval = setInterval(updateCountdown, 1000);
                                            updateCountdown(); // initial call to display the countdown immediately
                                        }
                                        // Example: Start countdown for 2 days
                                        startCountdown({{ $lottery->time }});
                                    </script>
                                </div>
                            </div>
                            <a href="{{ route('Product.Details', $lottery->id) }}">
                                <img src="{{ asset('lottery/' . $lottery->picture) }}" class="img-same">
                            </a>
                            <div class="card-body text-white bg-light-dark">
                                <h4 class="text-center"
                                    style="font-size:20px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                                    {{ $lottery->title }}</h4>
                                <div class="d-flex justify-content-center text-black">
                                    <span style="background-color:#ffbd0a;padding:1px 10px 1px 10px;border-radius: 5px;">
                                        <b>100</b>
                                        <img src="{{ asset('assets/img/cred.webp') }}" height="15px" width="15px">
                                    </span>
                                </div>
                                <div class="buttons mt-4">
                                    <a href="{{ route('Product.Details', $lottery->id) }}"
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
