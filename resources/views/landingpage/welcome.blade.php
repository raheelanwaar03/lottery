<!DOCTYPE html>
<html lang="en">

<head>
    <title>DreamDubai | We Love Winners</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container-fluid p-3 bg-theme-dark text-white text-center px-5">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo d-flex justify-content-start gap-5 align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                <ul class="list-unstyled mb-0 d-flex justify-content-start align-items-center gap-4">
                    <li><a href="#" class="text-white text-decoration-none fw-bold">All competitions</a></li>
                    <li><a href="#" class="text-white text-decoration-none fw-bold">Charity</a></li>
                </ul>
            </div>
            <div class="action-buttons d-flex justify-content-start align-items-center gap-4">
                <div class="auth-buttons d-flex justify-content-start align-items-center gap-4">
                    <a href="#" class="btn btn-outline-light px-4">Sign in</a>
                    <a href="#" class="btn bg-gradient-theme px-3">Sign Up</a>
                </div>
                <div class="cart-button d-flex justify-content-start align-items-center gap-4">
                    <div class="cart">
                        <i class="bi bi-cart3 text-gradient-theme fs-2"></i>
                    </div>
                    <div class="nav-menu">
                        <i class="bi bi-list text-gradient-theme fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-theme-secondary py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-start align-items-center gap-3">
                <p class="text-white mb-0" style="font-size: 10px;">Payments <br> Accepted</p>
                <ul class="mb-0 list-unstyled d-flex justify-content-start align-items-center gap-2">
                    <li><img src="{{ asset('assets/img/cards/Visa.svg') }}" alt="Payment" width="25"></li>
                    <li><img src="{{ asset('assets/img/cards/Mastercard.svg') }}" alt="Payment" width="25"></li>
                    <li><img src="{{ asset('assets/img/cards/ApplePay.svg') }}" alt="Payment" width="25"></li>
                    <li><img src="{{ asset('assets/img/cards/PayPal.svg') }}" alt="Payment" width="25"></li>
                </ul>
            </div>
            <div class="raiting">
                <img src="{{ asset('assets/img/homeBannerTrust.svg') }}" alt="">
            </div>
        </div>
    </div>
    <section id="hero-section" class="py-5 d-flex justify-content-center align-items-center px-5">
        <div class="container-fluid">
            <span class="badge bg-dark"><img src="{{ asset('assets/img/crown.svg') }}" alt="Crown"> JACKPOT
                DRAW</span>
            <h1 class="text-white display-4 fw-bold">WIN A MERCEDES GLC AMG <br> LINE + PRIZE BUNDLE!</h1>
            <h1 class="text-gradient-theme mb-4">£0.50</h1>
            <a href="#" class="btn btn-lg fw-bold text-uppercase bg-gradient-theme px-5">Enter now</a>
        </div>
    </section>
    <section id="competition" class="bg-theme-dark py-5">
        <div class="container">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
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
                            <img src="{{ asset('assets/img/competition/2.webp') }}" alt="Los Angeles"
                                class="d-block" width="100%">
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
                            <img src="{{ asset('assets/img/competition/3.webp') }}" alt="Los Angeles"
                                class="d-block" width="100%">
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

    <section class="bg-theme-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-theme-secondary">
                        <div class="card-body">
                            <img src="{{ asset('assets/img/review.png') }}" alt="TrustPoilot" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-theme-dark py-2">
        <div class="container">
            <div class="card bg-theme-secondary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="text-white mb-0">Supported payment options</h3>
                        <ul class="mb-0 list-unstyled d-flex justify-content-start align-items-center gap-2">
                            <li><img src="{{ asset('assets/img/cards/Visa.svg') }}" alt="Payment" width="50">
                            </li>
                            <li><img src="{{ asset('assets/img/cards/Visa.svg') }}" alt="Payment" width="50">
                            </li>
                            <li><img src="{{ asset('assets/img/cards/Visa.svg') }}" alt="Payment" width="50">
                            </li>
                            <li><img src="{{ asset('assets/img/cards/Visa.svg') }}" alt="Payment" width="50">
                            </li>
                        </ul>
                        <a href="#" class="btn bg-gradient-theme px-3 fw-bold">SIGN UP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-theme-dark py-5">
        <div class="container">
            <div class="card bg-theme-secondary text-white">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="left-text" style="width: 300px">
                                <h4>£ 16.4 Million</h4>
                                <h6>won in prizes so far</h6>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col p-0">
                                <div class="d-flex gap-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0">230,396 raffle winners and counting</h6>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="d-flex gap-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0">230,396 raffle winners and counting</h6>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="d-flex gap-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0">230,396 raffle winners and counting</h6>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="d-flex gap-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0">230,396 raffle winners and counting</h6>
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
            <div class="d-flex justify-content-between align-items-center">
                <div class="left-content d-flex align-items-center gap-3">
                    <h3 class="fw-bold text-white">LIVE RAFFLES</h3>
                    <div class="badge bg-dark px-3 py-1 rounded-pill">
                        <div class="d-flex gap-0 align-items-center ">
                            <i class="bi bi-dot text-warning " style="font-size: 30px;"></i>
                            <h6 class="mb-0"> 20 active raffles</h6>
                        </div>
                    </div>
                    <div class="badge bg-dark px-3 py-1 rounded-pill">
                        <div class="d-flex gap-0 align-items-center ">
                            <i class="bi bi-dot text-danger " style="font-size: 30px;"></i>
                            <h6 class="mb-0"> 2 ending soon</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="badge bg-dark">All</div>
                    <div class="badge bg-dark">Cash</div>
                    <div class="badge bg-dark">Tech</div>
                    <div class="badge bg-dark">Car</div>
                    <div class="badge bg-dark">Holiday</div>
                    <div class="badge bg-dark">Other</div>
                </div>
            </div>
            <div class="row mt-5">
                <?php
                for ($i = 0; $i < 20; $i++) {
                ?>
                <div class="col-md-3 mb-5">
                    <div class="card bg-theme-secondary position-relative">
                        <div class="position-absolute"
                            style="top:-25px; width: 80%; left: 50%; transform: translateX(-50%);">
                            <div class="bg-light rounded-pill text-center py-1 text-dark fs-5 fw-bold shadow">Draw
                                Monday 10pm</div>
                        </div>
                        <img src="{{ asset('assets/img/games/1.webp') }}" alt="Game Image" width="100%">
                        <div class="card-body text-white">
                            <h4 class="text-center">Win a Ninja 12in1 Multicooker</h4>
                            <p class="mb-0 text-center">Cash alternative : £130</p>
                            <small class="text-start" style="font-size: 12px;">25% Sold</small>
                            <div class="progress-bar bg-dark poisition-relative">
                                <div class="poisition-relative">
                                    <div class="bg-theme" style="width: 25%; padding: 2px"></div>
                                    <div class="position-absolute" style="bottom: 61px; left: 60px">
                                        <i class="bi bi-dot text-warning fs-1"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons mt-4">
                                <a href="#" class="btn btn-lg bg-gradient-theme px-3 fw-bold w-100">Enter
                                    now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>

        </div>
    </section>

    <footer class="bg-dark">
        <div class="container py-4">
            <div class="d-flex justify-content-center align-items-center py-5 gap-3">
                <img src="{{ asset('assets/img/googleplay.svg') }}" alt="Play Store">
                <img src="{{ asset('assets/img/googleplay.svg') }}" alt="App Store">
            </div>
            <hr class="text-white my-5">
            <div class="d-flex justify-content-between align-items-center">
                <img src="{{ asset('assets/img/trust.svg') }}" alt="">
                <div class="d-flex flex-column justify-content-start align-items-center gap-3">
                    <p class="text-white mb-0" style="font-size: 20px;">Payments we accept</p>
                    <ul class="mb-0 list-unstyled d-flex justify-content-start align-items-center gap-2">
                        <li><img src="{{ asset('assets/img/cards/Visa.svg') }}" alt="Payment" width="50"></li>
                        <li><img src="{{ asset('assets/img/cards/Mastercard.svg') }}" alt="Payment" width="50">
                        </li>
                        <li><img src="{{ asset('assets/img/cards/ApplePay.svg') }}" alt="Payment" width="50">
                        </li>
                        <li><img src="{{ asset('assets/img/cards/PayPal.svg') }}" alt="Payment" width="50">
                        </li>
                        <li><img src="{{ asset('assets/img/cards/Google+Pay.svg') }}" alt="Payment" width="50">
                        </li>
                    </ul>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="text-white">Follow us</h5>
                    <ul class="mb-0 list-unstyled fs-3 d-flex justify-content-center gap-2">
                        <li><i class="bi bi-facebook text-white"></i></li>
                        <li><i class="bi bi-messenger text-white"></i></li>
                        <li><i class="bi bi-whatsapp text-white"></i></li>
                        <li><i class="bi bi-facebook text-white"></i></li>
                    </ul>
                </div>
            </div>
            <hr class="text-white my-5">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('assets/img/logo-light.png') }}" alt="Logo" width="200">
                </div>
                <div class="col-md-3">
                    <h4 class="text-white mb-4">Website</h4>
                    <ul class="list-unstyled mb-0 text-white">
                        <li>My Raffles</li>
                        <li>News & Blog</li>
                        <li>Account</li>
                        <li>Responsible Play</li>
                        <li>Winners Gallery</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="text-white mb-4">Categories</h4>
                    <ul class="list-unstyled mb-0 text-white">
                        <li>My Raffles</li>
                        <li>News & Blog</li>
                        <li>Account</li>
                        <li>Responsible Play</li>
                        <li>Winners Gallery</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="text-white mb-4">Contact</h4>
                    <ul class="list-unstyled mb-0 text-white">
                        <li>My Raffles</li>
                        <li>News & Blog</li>
                        <li>Account</li>
                        <li>Responsible Play</li>
                        <li>Winners Gallery</li>
                    </ul>
                </div>
            </div>
            <hr class="text-white my-5">
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-white mb-0">Copyright © 2019 - 2024 Raffolux Ltd. All rights reserved. Company No.
                    10962686
                </p>
                <div class="privacy d-flex gap-4">
                    <a href="#" class="text-white text-decoration-none">Privacy Policy</a>
                    <a href="#" class="text-white text-decoration-none">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
