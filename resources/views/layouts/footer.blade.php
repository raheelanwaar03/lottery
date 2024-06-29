<footer class="bg-dark">
    <div class="container py-4">
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
        <div class="d-md-flex text-center text-md-start justify-content-between align-items-center">
            <p class="text-white mb-0">Copyright © 2024. All rights reserved. </p>
            <div class="privacy d-flex gap-4 justify-content-center justify-content-md-betwen">
                <a href="#" class="text-white text-decoration-none">Privacy Policy</a>
                <a href="#" class="text-white text-decoration-none">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>

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
