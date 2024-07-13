<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- add favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container-fluid py-3 px-md-3 bg-theme-dark text-white text-center">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                @if (auth()->user())
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="btn text-white d-block d-md-none bg-gradient-theme me-3 py-1 fw-bold me-md-0">Logout</button>
                    </form>
                @else
                    <a href="javascript:void(0)"
                        class="btn d-block d-md-none bg-gradient-theme me-3 py-1 fw-bold me-md-0" data-bs-toggle="modal"
                        data-bs-target="#authModal">Sign
                        In</a>
                @endif
                <a href="{{ route('Welcome') }}">
                    <img src="{{ asset('logo/logo.png') }}" alt="Logo" class="logo me-md-4">
                </a>
                <ul class="list-unstyled d-none d-md-flex mb-0 d-flex justify-content-start align-items-center gap-4">
                    <li><a href="#" class="text-white text-decoration-none fw-bold">All competitions</a></li>
                    <li><a href="#" class="text-white text-decoration-none fw-bold">Winners</a></li>
                </ul>
            </div>
            <div class="action-buttons d-flex justify-content-start align-items-center gap-4">
                @if (auth()->user())
                    <div class="auth-buttons d-flex d-none d-md-flex justify-content-start align-items-center gap-4">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn bg-gradient-theme text-white px-3" type="submit">Logout</a>
                        </form>
                    </div>
                @else
                    <div class="auth-buttons d-flex d-none d-md-flex justify-content-start align-items-center gap-4">
                        <a href="javascript:void(0)" class="btn btn-outline-light px-4" data-bs-toggle="modal"
                            data-bs-target="#authModal">Sign in</a>
                        <a href="javascript:void(0)" class="btn bg-gradient-theme px-3" data-bs-toggle="modal"
                            data-bs-target="#authModal">Sign Up</a>
                    </div>
                @endif
                <div class="cart-button d-flex justify-content-end align-items-center gap-4">
                    <div class="cart">
                        <i class="bi bi-cart3 text-gradient-theme fs-2"></i>
                    </div>
                    <div class="nav-menu">
                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#sidemenuLoggedIn">
                            <i class="bi bi-list text-gradient-theme fs-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-theme-secondary d-none d-md-block py-2">
        <div class="container d-block d-md-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-start align-items-center gap-3 text-center text-md-end">
                <p class="text-white mb-0" style="font-size: 10px;">Payments <br> Accepted</p>
                <ul class="mb-0 list-unstyled d-flex justify-content-start align-items-center gap-2">
                    <li><img src="{{ asset('assets/img/cards/Visa.svg') }}" alt="Payment" width="25"></li>
                    <li><img src="{{ asset('assets/img/cards/Mastercard.svg') }}" alt="Payment" width="25"></li>
                    <li><img src="{{ asset('assets/img/cards/ApplePay.svg') }}" alt="Payment" width="25"></li>
                    <li><img src="{{ asset('assets/img/cards/PayPal.svg') }}" alt="Payment" width="25"></li>
                </ul>
            </div>
            <div class="raiting mt-2 mt-md-0 text-center text-md-end">
                <img src="{{ asset('assets/img/homeBannerTrust.svg') }}" alt="">
            </div>
        </div>
    </div>
