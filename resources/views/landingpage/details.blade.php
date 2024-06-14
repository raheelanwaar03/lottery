<!DOCTYPE html>
<html lang="en">

<head>
    <title>Details</title>
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

    <section id="product-container" class="bg-theme-dark pb-5">
        <div class="mobile-bottom-checkout bg-theme-dark d-block d-md-none">
            <div class="qty-box px-3 mt-3">
                <button class="btn btn-minus btn-dark py-2 text-white" onclick="changeQty(-1)">-</button>
                <input type="text" id="qtyInput" class="form-control py-2 bg-dark text-white w-100" value="1" readonly>
                <button class="btn btn-plus btn-dark py-2 text-white" onclick="changeQty(1)">+</button>
            </div>
            <div class="form-group">
                <button class="btn bg-gradient-theme mt-4 py-3 fw-bold w-100">
                    <div class="d-flex justify-content-between">
                        <h3 class="mb-0">Add to Cart</h3>
                        <h3 class="mb-0">£0.99</h3>
                    </div>
                </button>
            </div>
            <script>
                function changeQty(change) {
                    var qtyInput = document.getElementById('qtyInput');
                    var currentQty = parseInt(qtyInput.value);
                    var newQty = currentQty + change;
                    if (newQty > 0) {
                        qtyInput.value = newQty;
                    }
                }
            </script>
        </div>
        <div class="d-block d-md-none">
            <div class="">
                <img src="{{ asset('assets/img/product.webp') }}" alt="Product Image" width="100%" class="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-md-1 order-2 mt-4">
                    <div class="d-none d-md-block">
                        <img src="{{ asset('assets/img/product.webp') }}" alt="Product Image" width="100%" class="rounded">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="accordion" class="mt-5">
                                <div class="d-flex flex-column gap-5">
                                    <div class="card border-dark">
                                        <div class="card-header accordion-header bg-theme-dark text-white py-3" data-bs-toggle="collapse" href="#collapseOne">
                                            <h4 class="fw-bold">About the Price</h4>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                            <div class="card-body text-white bg-theme-dark pb-5">
                                                <h6>Unlock a world of possibilities with our thrilling £500 cash raffle bonanza!</h6>
                                                <p>Imagine the windfall you could experience – whether you're dreaming of a spontaneous getaway, that latest tech gadget, or perhaps boosting your savings for a larger goal in the future. This isn't just another raffle; it's your chance to make those dreams come a little closer to reality.</p>
                                                <p>Every ticket you secure increases your odds, drawing you nearer to that delightful £500 prize. Are you a first-time participant? Or perhaps a seasoned raffle enthusiast? No matter your experience, this is the perfect opportunity to dive into the excitement.</p>
                                                <p>As the anticipation builds, picture the moment you could be named the lucky winner. Will you splurge on a treat? Or save and invest? The choice is yours!</p>
                                                <p>Don't let this chance slip through your fingers. Dive in, dream big, and stand a chance to be our next £500 sensation. #Epic500PoundWin</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-dark">
                                        <div class="card-header accordion-header bg-theme-dark text-white py-3" data-bs-toggle="collapse" href="#collapseTwo">
                                            <h4 class="fw-bold">Price detail & specificaton</h4>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" data-bs-parent="#accordion">
                                            <div class="card-body text-white bg-theme-dark pb-5">
                                                <ul>
                                                    <li>£500</li>
                                                    <li>Tax-Free Cash</li>
                                                    <li>Direct Bank Transfer</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-dark">
                                        <div class="card-header accordion-header bg-theme-dark text-white py-3" data-bs-toggle="collapse" href="#collapseThree">
                                            <h4 class="fw-bold">Raffle Terms</h4>
                                        </div>
                                        <div id="collapseThree" class="collapse show" data-bs-parent="#accordion">
                                            <div class="card-body text-white bg-theme-dark pb-5">
                                                <ul>
                                                    <li>The draw will be carried out by Random.org, our third party random number generator.</li>
                                                    <li>The draw will take place regardless of whether all the tickets sell out.</li>
                                                    <li>The draw will take place as soon as all tickets are sold OR the raffle expires.</li>
                                                    <li>The raffle will expire at 22:00 on 13/06/2024.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 order-md-2 order-1 mt-4">
                    <div class="card bg-theme-dark border border-dark text-white">
                        <div class="card-body">
                            <div class="text-center">
                                <h3>Win £500 Tax Free Cash</h3>
                                <div class="badge bg-dark mt-3 mb-4 fs-3">
                                    £0.99
                                </div>
                            </div>
                            <div class="icon-group d-flex justify-content-around align-items-center">
                                <div class="icon-item text-center">
                                    <i class="bi bi-person-circle fs-3"></i>
                                    <p class="mb-0 fs-7">75 MAX per person</p>
                                </div>
                                <div class="icon-item text-center">
                                    <i class="bi bi-calendar-week fs-3"></i>
                                    <p class="mb-0 fs-7">Draw date: 13th Jun, 10pm</p>
                                </div>
                                <div class="icon-item text-center">
                                    <i class="bi bi-ticket-perforated fs-3"></i>
                                    <p class="mb-0 fs-7">899 total tickets</p>
                                </div>
                            </div>
                            <div class="my-4">
                                <div class="">
                                    <div class="d-flex justify-content-between mb-2 align-items-center fs-7">
                                        <span>1</span>
                                        <span>0 tickets sold</span>
                                        <span>500</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress bg-gradient-theme" style="width: 50%; height: 6px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="terms text-center">
                                <p class="fs-7">See terms for <a href="#" class="text-gradient-theme text-decoration-none">free postal entry</span></p>
                            </div>
                            <div class="checkout-ticket">
                                <div class="form-group">
                                    <select name="ticket_qty" id="ticket_qty" class="form-select bg-theme-secondary text-white">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn bg-gradient-theme mt-4 py-3 fw-bold w-100">Add Tickets to Cart £0.99</button>
                                </div>
                            </div>
                            <div class="review">
                                <div class="text-center mt-4">
                                    <img src="{{ asset('assets/img/trust.svg') }}" alt="Trust">
                                </div>
                                <div class="text-white text-start mt-4">
                                    <p>Instant draw Thursday 13th Jun at 10PM via Random.org, an independent true random software.</p>
                                    <p>This competition will close early if all tickets sell out and the draw will take place on that same day!</p>
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
                    <ul class="mb-0 list-unstyled fs-3 d-flex justify-content-around px-5 px-md-0 justify-content-md-center gap-2">
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
