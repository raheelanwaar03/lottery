<footer class="bg-dark">
    <div class="container py-4">
        <div class="d-flex justify-content-center align-items-center py-2 gap-3">
            <img src="{{ asset('assets/img/googleplay.svg') }}" alt="Play Store" class="download-button" width="100">
            <img src="{{ asset('assets/img/appstore.svg') }}" alt="App Store" class="download-button" width="100">
        </div>
        <hr class="text-white my-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="text-center text-md-start mb-5">
                    <img src="{{ asset('logo/logo.png') }}" alt="Logo" style="height: 150px;width:150px">
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
                        <a class="nav-link active bg-theme-dark text-white border-gray" data-bs-toggle="tab"
                            href="#login">Sign
                            in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-theme-dark text-white border-gray" data-bs-toggle="tab"
                            href="#register">Sign
                            Up</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="login">
                        <h3 class="text-center my-4 text-white">Sign in</h3>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="text-white mb-2">Enter your Email</label>
                                <input type="email" name="email" id="email" placeholder="your email"
                                    class="form-control bg-dark text-white border-gray bg-theme-dark">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white mb-2">Enter your Password</label>
                                <input type="password" name="password" id="password" placeholder="your password"
                                    class="form-control bg-dark text-white border-gray bg-theme-dark">
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
                                class="bg-theme-dark border-1 py-2 border-gray rounded outline-0 d-flex justify-content-center gap-2">
                                <img src="{{ asset('/assets/img/google.svg') }}" alt="Google Login">
                                <p class="mb-0 text-white">Sign in with Google</p>
                            </button>
                            <button
                                class="bg-theme-dark border-1 py-2 border-gray rounded outline-0 d-flex justify-content-center gap-2">
                                <img src="{{ asset('/assets/img/facebook.svg') }}" alt="Facebook Login">
                                <p class="mb-0 text-white">Sign in with Facebook</p>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane container" id="register">
                        <h3 class="text-center my-4 text-white">Sign up</h3>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="text-white mb-2">Enter your Full Name</label>
                                <input type="text" name="name" id="name" placeholder="your Full Name"
                                    class="form-control bg-dark border-gray text-white bg-theme-dark">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="text-white mb-2">Enter your Email</label>
                                <input type="email" name="email" id="email" placeholder="your email"
                                    class="form-control bg-dark  border-gray text-white bg-theme-dark">
                            </div>
                            <div class="form-group mb-3">
                                <label for="country" class="text-white mb-2">Country</label>
                                <input type="text" name="country" id="country" placeholder="your country"
                                    class="form-control bg-dark  border-gray text-white bg-theme-dark">
                            </div>
                            <div class="form-group mb-3">
                                <label for="province" class="text-white mb-2">Enter your Province</label>
                                <input type="text" name="province" id="province" placeholder="your province"
                                    class="form-control bg-dark  border-gray text-white bg-theme-dark">
                            </div>
                            <div class="form-group mb-3">
                                <label for="city" class="text-white mb-2">Enter your City</label>
                                <input type="text" name="city" id="city" placeholder="your city"
                                    class="form-control bg-dark  border-gray text-white bg-theme-dark">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white mb-2">Enter your Password</label>
                                <input type="password" name="password" id="password" placeholder="your password"
                                    class="form-control bg-dark  border-gray text-white bg-theme-dark">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white mb-2">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password"
                                    placeholder="Confirm password"
                                    class="form-control bg-dark  border-gray text-white bg-theme-dark">
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
                                class="bg-theme-dark border-1 py-2  border-gray rounded outline-0 d-flex justify-content-center gap-2">
                                <img src="{{ asset('/assets/img/google.svg') }}" alt="Google Login">
                                <p class="mb-0 text-white">Sign up with Google</p>
                            </button>
                            <button
                                class="bg-theme-dark border-1 py-2  border-gray rounded outline-0 d-flex justify-content-center gap-2">
                                <img src="{{ asset('/assets/img/facebook.svg') }}" alt="Facebook Login">
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
            <h4>Menu</h4>
            <ul class="list-unstyled d-flex flex-column gap-3 mb-0 mt-5">
                <li>
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card card-body py-2 bg-theme-dark border border-dark">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-house-door fs-3"></i>
                                <h6 class="mb-0">Home</h6>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card card-body py-2 bg-theme-dark border border-dark">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-house-door fs-3"></i>
                                <h6 class="mb-0">Home</h6>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card card-body py-2 bg-theme-dark border border-dark">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-house-door fs-3"></i>
                                <h6 class="mb-0">Home</h6>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card card-body py-2 bg-theme-dark border border-dark">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-house-door fs-3"></i>
                                <h6 class="mb-0">Home</h6>
                            </div>
                        </div>
                    </a>
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

<!-- Logged In Sidemenu -->
<div class="offcanvas offcanvas-end" id="sidemenuLoggedIn">
    <div class="offcanvas-body text-white p-0 bg-theme-dark">
        <div class="bg-dark px-4 py-2">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas"></button>
            </div>
            @if (auth()->user())
                <h6 class="text-white fw-bold">Hi {{ auth()->user()->name }}</h6>
            @else
                <h6 class="text-white fw-bold">Hi Guest</h6>
            @endif
            <p> You have tickets in <span class="text-theme">0 active raffle</span></p>
        </div>
        <div class="px-4 py-2 mt-4">
            <h6 class="text-uppercase text-light-gray fs-tiny fw-bold">My Points</h6>
            <div class="point-balance">
                <h6>You have <span class="border border-theme rounded px-2">0</span> points</h6>
            </div>
            <p class="text-light-gray"> Use your Jeetomax coins to redeem prizes in the </p>
        </div>
        <div class="px-4 py-2 text-white">
            <h6 class="fs-tiny fw-bold text-light-gray">MENU</h6>
            <ul class="list-unstyled d-flex flex-column gap-1 mb-0">
                <li class="">
                    <a href="{{ route('Welcome') }}" class="text-decoration-none text-white">
                        <div class="card bg-light-gray card-body py-2 bg-none">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-house-door fs-5"></i>
                                <h6 class="mb-0">Home</h6>
                            </div>
                        </div>
                    </a>
                </li>
                @if (auth()->user())
                    <li class="">
                        <a href="{{ route('User.Coins') }}" class="text-decoration-none text-white">
                            <div class="card bg-light-gray card-body py-2 bg-none">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-filter-circle fs-5"></i>
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <h6 class="mb-0">My Credits </h6>
                                        <span class="px-2 py-0 text-theme text-end fs-tiny">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endif
                <li class="">
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card bg-light-gray card-body py-2 bg-none">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-ticket-perforated fs-5"></i>
                                <h6 class="mb-0">My Tickets <sup
                                        class="bg-theme px-2 py-0 rounded-pill text-dark">0</sup></h6>
                            </div>
                        </div>
                    </a>
                </li>
                @if (auth()->user())
                    <li class="">
                        <a href="{{ route('User.Store') }}" class="text-decoration-none text-white">
                            <div class="card bg-light-gray card-body py-2 bg-none">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-bag fs-5"></i>
                                    <h6 class="mb-0">Store</h6>
                                </div>
                            </div>
                        </a>
                    </li>
                @endif
                <li class="">
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card bg-light-gray card-body py-2 bg-none">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-trophy fs-5"></i>
                                <h6 class="mb-0">Winners</h6>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card bg-light-gray card-body py-2 bg-none">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-gift fs-5"></i>
                                <h6 class="mb-0">Refer a friend</h6>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card bg-light-gray card-body py-2 bg-none">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-box2-heart fs-5"></i>
                                <h6 class="mb-0">Charity</h6>
                            </div>
                        </div>
                    </a>
                </li>
                <h6 class="fs-tiny fw-bold text-light-gray">ACCOUNT SETTINGS</h6>
                <li class="">
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card bg-light-gray card-body py-2 bg-none">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-person fs-5"></i>
                                <h6 class="mb-0">Personal info</h6>
                            </div>
                        </div>
                    </a>
                </li>
                <h6 class="fs-tiny fw-bold text-light-gray">SITE INFORMATION</h6>
                <li class="">
                    <a href="#" class="text-decoration-none text-white">
                        <div class="card bg-light-gray card-body py-2 bg-none">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-question-circle fs-5"></i>
                                <h6 class="mb-0">Help & FAQs</h6>
                            </div>
                        </div>
                    </a>
                </li>
                @if (auth()->user())
                    <li class="">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="#" class="text-decoration-none text-white">
                                <div class="card bg-light-gray card-body py-2 bg-none">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="bi bi-box-arrow-right fs-5"></i>
                                        <h6 class="mb-0">Logout</h6>
                                    </div>
                                </div>
                            </a>
                        </form>
                    </li>
                @endif
            </ul>
            <div class="d-flex mt-4 mb-5 justify-content-center align-items-center gap-1">
                <a href="#" class="fs-tiny text-decoration-none text-white">Terms</a>
                <span>|</span>
                <a href="#" class="fs-tiny text-decoration-none text-white">Privacy</a>
                <span>|</span>
                <a href="#" class="fs-tiny text-decoration-none text-white">Responsible Play</a>
            </div>
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
