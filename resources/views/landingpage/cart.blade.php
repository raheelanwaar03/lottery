<!DOCTYPE html>
<html lang="en">

<head>
    <title>DreamDraw</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container-fluid py-3 px-md-3 bg-theme-dark text-white text-center">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="btn d-block d-md-none bg-gradient-theme me-3 py-1 fw-bold me-md-0">Sign In</a>
                <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo" class="logo me-md-4">
                <ul class="list-unstyled d-none d-md-flex mb-0 d-flex justify-content-start align-items-center gap-4">
                    <li><a href="{{ route('Welcome') }}" class="text-white text-decoration-none fw-bold">Home</a></li>
                    <li><a href="{{ route('Cart') }}" class="text-white text-decoration-none fw-bold">Cart</a></li>
                    <li><a href="{{ route('Details') }}" class="text-white text-decoration-none fw-bold">Detials</a></li>
                </ul>
            </div>
            <div class="action-buttons d-flex justify-content-start align-items-center gap-4">
                <div class="auth-buttons d-flex d-none d-md-flex justify-content-start align-items-center gap-4">
                    <a href="#" class="btn btn-outline-light px-4">Sign in</a>
                    <a href="#" class="btn bg-gradient-theme px-3">Sign Up</a>
                </div>
                <div class="cart-button d-flex justify-content-end align-items-center gap-4">
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

    <!-- body -->

    <section id="cart" class="bg-theme-dark pb-5">
        <div class="mobile-bottom-checkout bg-theme-dark d-block d-md-none">
            <div class="terms text-center mt-4 bg-dark py-2">
                <p class="fs-7 mb-0 text-white">You will earn 0 for this purchases</p>
            </div>
            <div class="checkout-ticket">
                <div class="form-group">
                    <button class="btn bg-gradient-theme mt-4 py-3 fw-bold w-100">Checkout £0.99</button>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-8 mt-4">
                    <div class="row">
                        <div class="col-md-12 my-5">
                            <div class="d-flex justify-content-between align-items-center text-white">
                                <i class="bi bi-arrow-left fs-3"></i>
                                <h4>Cart</h4>
                                <div></div>
                            </div>
                            <div class="d-flex justify-content-center d-none d-md-block">
                                <div class="cart-notice rounded-pill bg-theme px-4 py-2 fw-bold">
                                    <i class="bi bi-alarm-fill"></i>
                                    Your cart will expire in 00 : 13 : 16
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-white fw-bold mb-5">Your cart</h4>
                            <div class="card bg-theme-dark border border-dark">
                                <div class="card-body position-relative">
                                    <div class="position-absolute top-0 end-0 me-3 mt-3">
                                        <i class="bi bi-trash3 text-white fs-6"></i>
                                    </div>
                                    <div
                                        class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                                        <img src="{{ asset('assets/img/product-thumb.webp') }}" alt="Product thumb" width="150">
                                        <div class="item-detail">
                                            <h6 class="text-white fw-bold mt-4 mt-md-0">Win £500 Tax Free Cash</h6>
                                            <p class="text-white">£0.99 per entry | 1 entry</p>
                                            <div class="d-flex text-dark gap-2">
                                                <span class="badge rounded-pill bg-theme px-4 py-1 fs-6 text-dark"> <a
                                                        class="text-decoration-none text-dark" href="#">x</a>
                                                    763</span>
                                                <span class="badge rounded-pill bg-theme px-4 py-1 fs-6 text-dark"> <a
                                                        class="text-decoration-none text-dark" href="#">x</a>
                                                    763</span>
                                            </div>
                                        </div>
                                        <h3 class="fs-4 text-gradient-theme mt-4 mt-md-0">£0.99</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card bg-theme-dark border border-dark text-white">
                        <div class="card-body">
                            <div class="text-start">
                                <h3>Summary</h3>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0">My cart (1 entry )</p>
                                <p class="mb-0">£0.99</p>
                            </div>

                            <div class="promo-code">
                                <label for="promot_code" class="mb-2">Promo code</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="promot_code" class="form-control"
                                        placeholder="Enter promo code" aria-label="Enter promo code"
                                        aria-describedby="button-addon2">
                                    <button class="btn bg-gradient-theme" type="button"
                                        id="button-addon2">Apply</button>
                                </div>
                            </div>
                            <div class="total mt-4 d-flex justify-content-between rounded-pill">
                                <h4>Total</h4>
                                <h4>£0.00</h4>
                            </div>
                            <div class="terms text-center d-none d-md-block mt-4 bg-dark py-2">
                                <p class="fs-7 mb-0 ">You will earn 0 for this purchases</p>
                            </div>
                            <div class="checkout-ticket d-none d-md-block">
                                <div class="form-group">
                                    <button class="btn bg-gradient-theme mt-4 py-3 fw-bold w-100">Checkout
                                        £0.99</button>
                                </div>
                            </div>
                            <div class="review">
                                <div class="text-white text-start mt-4">
                                    <h6>Play with Confidence</h6>
                                    <ul class="custom-list">
                                        <li>Reliable and Secure Card Processing</li>
                                        <li>Trustworthy Draws from Random.org</li>
                                        <li>Transparent Entry Lists & No Extensions</li>
                                        <li>Checkout with PayPal, Apple Pay & G Pay</li>
                                    </ul>
                                    <p>Still unsure? Give us a call on 020 3929 7496 and we’ll be happy to answer any
                                        questions</p>
                                </div>
                                <div class="text-center mt-4">
                                    <img src="{{ asset('assets/img/trust.svg') }}" alt="Trust">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark">
        <div class="container py-4">
            <div class="d-flex justify-content-center align-items-center py-2 gap-3">
                <img src="{{ asset('assets/img/googleplay.svg') }}" alt="Play Store" class="download-button" width="100">
                <img src="{{ asset('assets/img/appstore.svg') }}" alt="App Store" class="download-button" width="100">
            </div>
            <hr class="text-white my-5">
            <div class="d-md-flex justify-content-between align-items-center">
                <div class="text-center mb-4 mb-md-0">
                    <img src="{{ asset('assets/img/trust.svg') }}" alt="">
                </div>
                <div class="d-flex flex-column mb-4 mb-md-0 justify-content-start align-items-center gap-3">
                    <p class="text-white mb-0" style="font-size: 20px;">Payments we accept</p>
                    <ul class="mb-0 list-unstyled d-flex justify-content-start align-items-center gap-2">
                        <li><img src="{{ asset('assets/img/cards/Visa.svg') }}" alt="Payment" width="50"></li>
                        <li><img src="{{ asset('assets/img/cards/Mastercard.svg') }}" alt="Payment" width="50"></li>
                        <li><img src="{{ asset('assets/img/cards/ApplePay.svg') }}" alt="Payment" width="50"></li>
                        <li><img src="{{ asset('assets/img/cards/PayPal.svg') }}" alt="Payment" width="50"></li>
                        <li><img src="{{ asset('assets/img/cards/Google+Pay.svg') }}" alt="Payment" width="50"></li>
                    </ul>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="text-white text-center text-md-start mt-3 mt-md-0">Follow us</h5>
                    <ul
                        class="mb-0 list-unstyled fs-3 d-flex justify-content-around px-5 px-md-0 justify-content-md-center gap-2">
                        <li><i class="bi bi-facebook text-white"></i></li>
                        <li><i class="bi bi-messenger text-white"></i></li>
                        <li><i class="bi bi-whatsapp text-white"></i></li>
                        <li><i class="bi bi-facebook text-white"></i></li>
                    </ul>
                </div>
            </div>
            <hr class="text-white my-5">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="text-center text-md-start mb-5">
                        <img src="{{ asset('assets/img/logo-light.svg') }}" alt="Logo" width="200">
                    </div>
                </div>
                <div class="col-6 col-md-3 text-center text-md-start">
                    <h4 class="text-white my-4">Website</h4>
                    <ul class="list-unstyled mb-0 text-white">
                        <li>My Raffles</li>
                        <li>News & Blog</li>
                        <li>Account</li>
                        <li>Responsible Play</li>
                        <li>Winners Gallery</li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 text-center text-md-start">
                    <h4 class="text-white my-4">Categories</h4>
                    <ul class="list-unstyled mb-0 text-white">
                        <li>My Raffles</li>
                        <li>News & Blog</li>
                        <li>Account</li>
                        <li>Responsible Play</li>
                        <li>Winners Gallery</li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 text-center text-md-start">
                    <h4 class="text-white my-4">Contact</h4>
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
            <div class="d-md-flex text-center text-md-start justify-content-between align-items-center">
                <p class="text-white mb-0">Copyright © 2024. All rights reserved. </p>
                <div class="privacy d-flex gap-4 justify-content-center justify-content-md-betwen">
                    <a href="#" class="text-white text-decoration-none">Privacy Policy</a>
                    <a href="#" class="text-white text-decoration-none">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
