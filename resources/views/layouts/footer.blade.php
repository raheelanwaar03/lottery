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

<!-- Login Modal -->
<div class="modal" id="authModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body bg-theme-dark">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-close bg-white text-white" data-bs-dismiss="modal"></button>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs border-0 d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link bg-theme-dark text-theme active" data-bs-toggle="tab" href="#login">Sign
                            in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-theme-dark text-theme" data-bs-toggle="tab" href="#register">Sign Up</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="login">
                        <h3 class="text-center my-4 text-white">Sign in</h3>
                        <form action="#" method="POST">
                            <div class="form-group mb-3">
                                <label for="email" class="text-white mb-2">Enter your Email</label>
                                <input type="email" name="email" id="email" placeholder="your email"
                                    class="form-control bg-dark text-white bg-theme-dark">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white mb-2">Enter your Password</label>
                                <input type="password" name="password" id="password" placeholder="your password"
                                    class="form-control bg-dark text-white bg-theme-dark">
                            </div>
                            <div class="form-group text-end my-3">
                                <a href="#" class="text-theme text-decoration-none ">Forgot Password?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="btn bg-gradient-theme text-dark py-2 fw-bold fs-5 w-100">Sign In</button>
                            </div>
                        </form>

                        <p class="text-center my-4 text-white">Sign in via social account</p>
                        <div class="d-flex flex-column gap-2">
                            <button
                                class="bg-theme-dark border-1 py-2 border-white outline-0 d-flex justify-content-center gap-2">
                                <img src="/{{ asset('assets/img/google.svg') }}" alt="Google Login">
                                <p class="mb-0 text-white">Sign in with Google</p>
                            </button>
                            <button
                                class="bg-theme-dark border-1 py-2 border-white outline-0 d-flex justify-content-center gap-2">
                                <img src="/{{ asset('assets/img/facebook.svg') }}" alt="Facebook Login">
                                <p class="mb-0 text-white">Sign in with Facebook</p>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane container" id="register">
                        <h3 class="text-center my-4 text-white">Sign up</h3>
                        <form action="#" method="POST">
                            <div class="form-group mb-3">
                                <label for="name" class="text-white mb-2">Enter your Full Name</label>
                                <input type="text" name="name" id="name" placeholder="your Full Name"
                                    class="form-control bg-dark text-white bg-theme-dark">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="text-white mb-2">Enter your Email</label>
                                <input type="email" name="email" id="email" placeholder="your email"
                                    class="form-control bg-dark text-white bg-theme-dark">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white mb-2">Enter your Password</label>
                                <input type="password" name="password" id="password" placeholder="your password"
                                    class="form-control bg-dark text-white bg-theme-dark">
                            </div>
                            <div class="form-group text-end my-3">
                                <a href="#" class="text-theme text-decoration-none ">Forgot Password?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="btn bg-gradient-theme text-dark py-2 fw-bold fs-5 w-100">Sign In</button>
                            </div>
                        </form>

                        <p class="text-center my-4 text-white">Sign up via social account</p>
                        <div class="d-flex flex-column gap-2">
                            <button
                                class="bg-theme-dark border-1 py-2 border-white outline-0 d-flex justify-content-center gap-2">
                                <img src="/{{ asset('assets/img/google.svg') }}" alt="Google Login">
                                <p class="mb-0 text-white">Sign up with Google</p>
                            </button>
                            <button
                                class="bg-theme-dark border-1 py-2 border-white outline-0 d-flex justify-content-center gap-2">
                                <img src="/{{ asset('assets/img/facebook.svg') }}" alt="Facebook Login">
                                <p class="mb-0 text-white">Sign up with Facebook</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- side menu -->
<div class="offcanvas offcanvas-end" id="sidemenu">
    <div class="offcanvas-body bg-theme-dark">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="text-white">
            <p>Hi Raheel,<br>
                you have active tickets <span class="text-warning">0 active raffle</span>
            </p>
            <div class="my-3">
                <h5 style="opacity: 0.5">My Points</h5>
                <p>You have <button class="btn btn-sm btn-outline-warning">0 Coins</button>
                    <br> Vist our store to gain more points <a href="#" class="text-warning">Store</a>
                </p>
            </div>
            <div class="mt-3">
                <h5 style="opacity: 0.5">Menu</h5>
            </div>
            <ul class="list-unstyled d-flex flex-column gap-3 mb-0 mt-2">
                <li>
                    <div style="padding-left:4px;background-color:#191d2e;border-radius: 5px;">
                        <a href="#" class="text-decoration-none text-white">
                            <span class="pl-4 d-flex align-items-center">
                                <i class="bi bi-house" style="font-size:25px"></i>
                                <p style="margin-left: 15px;margin-top:12px;font-size:15px">Home</p>
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div style="padding-left:4px;background-color:#191d2e;border-radius: 5px;">
                        <a href="#" class="text-decoration-none text-white">
                            <span class="pl-4 d-flex align-items-center">
                                <i class="bi bi-ticket" style="font-size:25px"></i>
                                <p style="margin-left: 15px;margin-top:12px;font-size:15px">Tikets</p>
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div style="padding-left:4px;background-color:#191d2e;border-radius: 5px;">
                        <a href="#" class="text-decoration-none text-white">
                            <span class="pl-4 d-flex align-items-center">
                                <i class="bi bi-coin" style="font-size:25px"></i>
                                <p style="margin-left: 15px;margin-top:12px;font-size:15px">Credits</p>
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div style="padding-left:4px;background-color:#191d2e;border-radius: 5px;">
                        <a href="#" class="text-decoration-none text-white">
                            <span class="pl-4 d-flex align-items-center">
                                <i class="bi bi-bag" style="font-size:25px"></i>
                                <p style="margin-left: 15px;margin-top:12px;font-size:15px">Store</p>
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div style="padding-left:4px;background-color:#191d2e;border-radius: 5px;">
                        <a href="#" class="text-decoration-none text-white">
                            <span class="pl-4 d-flex align-items-center">
                                <i class="bi bi-gift" style="font-size:25px"></i>
                                <p style="margin-left: 15px;margin-top:12px;font-size:15px">Refer a Friend</p>
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div style="padding-left:4px;background-color:#191d2e;border-radius: 5px;">
                        <a href="#" class="text-decoration-none text-white">
                            <span class="pl-4 d-flex align-items-center">
                                <i class="bi bi-trophy" style="font-size:25px"></i>
                                <p style="margin-left: 15px;margin-top:12px;font-size:15px">Winner</p>
                            </span>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="social-icons">
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
        </div>
    </div>
</div>

</body>

</html>
