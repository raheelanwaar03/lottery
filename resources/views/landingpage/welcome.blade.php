<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dream Dubai | We Love Winners</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container-fluid p-3 bg-theme-dark text-white text-center px-5">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo d-flex justify-content-start gap-5 align-items-center">
                <img src="img/logo.png" alt="Logo">
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
                    <li><img src="img/cards/Visa.svg" alt="Payment" width="25"></li>
                    <li><img src="img/cards/Mastercard.svg" alt="Payment" width="25"></li>
                    <li><img src="img/cards/ApplePay.svg" alt="Payment" width="25"></li>
                    <li><img src="img/cards/PayPal.svg" alt="Payment" width="25"></li>
                    <li><img src="img/cards/Google+Pay.svg" alt="Payment" width="25"></li>
                </ul>
            </div>
            <div class="raiting">
                <img src="img/homeBannerTrust.svg" alt="">
            </div>
        </div>
    </div>
    <section id="hero-section" class="py-5 d-flex justify-content-center align-items-center px-5">
        <div class="container-fluid">
            <span class="badge bg-dark"><img src="img/crown.svg" alt="Crown"> JACKPOT DRAW</span>
            <h1 class="text-white display-4 fw-bold">WIN A MERCEDES GLC AMG <br> LINE + PRIZE BUNDLE!</h1>
            <h1 class="text-gradient-theme mb-4">£0.50</h1>
            <a href="#" class="btn btn-lg fw-bold text-uppercase bg-gradient-theme px-5">Enter now</a>
        </div>
    </section>
    <section id="brands" class="py-2">
        <div class="scroll-area">
            <?php
            $loop = 0;
            for ($i = 1; $i < 22; $i++) {
                if ($i == 21) {
                    $i = 1;
                    $loop++;
                }
                if ($loop == 5) {
                    $i = 22;
                }
            ?>
            <img src="img/brands/<?php echo $i; ?>.png" alt="Brand" class="me-4" width="50"
                <?php echo $i; ?>>

            <?php
            }
            ?>
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
                            <img src="img/competition/1.webp" alt="Los Angeles" class="d-block" width="100%">
                            <div class="card bg-theme-dark info-card-container">
                                <div class="card-body">
                                    <h2>£20k Ninja Instant Win DreamDubai</h2>
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
                            <img src="img/competition/2.webp" alt="Los Angeles" class="d-block" width="100%">
                            <div class="card bg-theme-dark info-card-container">
                                <div class="card-body">
                                    <h2>£20k Ninja Instant Win DreamDubai</h2>
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
                            <img src="img/competition/3.webp" alt="Los Angeles" class="d-block" width="100%">
                            <div class="card bg-theme-dark info-card-container">
                                <div class="card-body">
                                    <h2>£20k Ninja Instant Win DreamDubai</h2>
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
                            <img src="img/review.png" alt="TrustPoilot" width="100%">
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
                            <li><img src="img/cards/Visa.svg" alt="Payment" width="50"></li>
                            <li><img src="img/cards/Mastercard.svg" alt="Payment" width="50"></li>
                            <li><img src="img/cards/ApplePay.svg" alt="Payment" width="50"></li>
                            <li><img src="img/cards/PayPal.svg" alt="Payment" width="50"></li>
                            <li><img src="img/cards/Google+Pay.svg" alt="Payment" width="50"></li>
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
                                    <h6 class="mb-0">230,396 DreamDubai winners and counting</h6>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="d-flex gap-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0">230,396 DreamDubai winners and counting</h6>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="d-flex gap-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0">230,396 DreamDubai winners and counting</h6>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="d-flex gap-4">
                                    <i class="bi bi-trophy text-gradient-theme fs-2"></i>
                                    <h6 class="mb-0">230,396 DreamDubai winners and counting</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
