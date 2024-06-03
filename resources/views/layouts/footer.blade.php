<footer class="footer-section">
    <div class="bg-shape--top"><img src="{{ asset('assets/images/elements/round-shape-2.png') }}" alt="image"></div>
    <div class="container pt-120">
        <div class="row pb-5 align-items-center">
            <div class="col-lg-4">
                <ul class="app-btn">
                    <li><a href="#0"><img src="{{ asset('assets/images/icon/store-btn/1.png') }}" alt="image"></a>
                    </li>
                    <li><a href="#0"><img src="{{ asset('assets/images/icon/store-btn/2.png') }}"
                                alt="image"></a></li>
                </ul>
            </div>
            <div class="col-lg-8">
                <ul class="short-links justify-content-lg-end justify-content-center">
                    <li><a href="#0">Abount</a></li>
                    <li><a href="#0">FAQs</a></li>
                    <li><a href="#0">Contact</a></li>
                    <li><a href="#0">Terms of Services</a></li>
                    <li><a href="#0">Privacy</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row py-5 align-items-center">
            <div class="col-lg-6">
                <p class="copy-right-text text-lg-start text-center mb-lg-0 mb-3">Copyright © 2024.All Rights
                    Reserved By <a href="index.html">DreemDraw</a></p>
            </div>
            <div class="col-lg-6">
                <ul class="social-links justify-content-lg-end justify-content-center">
                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->
</div>
<!-- page-wrapper end -->
<!-- jQuery library -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<!-- custom select js -->
<script src="{{ asset('assets/js/vendor/jquery.nice-select.min.js') }}"></script>
<!-- lightcase js -->
<script src="{{ asset('assets/js/vendor/lightcase.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
<!-- slick slider js -->
<!-- <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script> -->
<!-- countdown js -->
<script src="{{ asset('assets/js/vendor/jquery.countdown.js') }}"></script>
<!-- jquery ui js -->
<script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
<!-- datepicker js -->
<script src="{{ asset('assets/js/vendor/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/datepicker.en.js') }}"></script>
<!-- preloader -->
<script src='{{ asset('assets/js/vendor/TweenMax.min.js') }}'></script>
<script src='{{ asset('assets/js/vendor/MorphSVGPlugin.min.js') }}'></script>
<script src="{{ asset('assets/js/preloader.js') }}"></script>
<!-- contact js -->
<script src="{{ asset('assets/js/contact.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('.slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>

</body>

</html>
