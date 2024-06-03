@extends('layouts.app')
@section('content')
    <div class="inner-hero-section">
        <div class="bg-shape"><img src="{{ asset('assets/images/elements/inner-hero-shape.png') }}" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#0">Lottery</a></li>
                        <li class="active">Contest No: B2T</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->

    <!-- contest-details-section start -->
    <section class="pb-120 mt-minus-300">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="clock-wrapper">
                        <p class="mb-2">This competition ends in:</p>
                        <div class="clock" data-clock="2023/12/10"></div>
                    </div><!-- clock-wrapper end -->
                </div>
                <div class="col-lg-12">
                    <div class="contest-cart">
                        <div class="contest-cart__left">
                            <div class="contest-cart__slider-area">
                                <div class="contest-cart__thumb-slider">
                                    <div class="single-slide"><img src="{{ asset('assets/images/contest/b1.png') }}" alt="image"></div>
                                    <div class="single-slide"><img src="{{ asset('assets/images/contest/b1.png') }}" alt="image"></div>
                                    <div class="single-slide"><img src="{{ asset('assets/images/contest/b1.png') }}" alt="image"></div>
                                    <div class="single-slide"><img src="{{ asset('assets/images/contest/b1.png') }}" alt="image"></div>
                                </div><!-- contest-cart__thumb-slider end -->
                                <div class="contest-cart__nav-slider">
                                    <div class="single-slide"><img src="{{ asset('assets/images/contest/s1.png') }}" alt="image"></div>
                                    <div class="single-slide"><img src="{{ asset('assets/images/contest/s2.png') }}" alt="image"></div>
                                    <div class="single-slide"><img src="{{ asset('assets/images/contest/s3.png') }}" alt="image"></div>
                                    <div class="single-slide"><img src="{{ asset('assets/images/contest/s1.png') }}" alt="image"></div>
                                </div><!-- contest-cart__nav-slider end -->
                            </div>
                        </div><!-- contest-cart__left end -->
                        <div class="contest-cart__right">
                            <h4 class="subtitle">Enter now for a chance to win</h4>
                            <h3 class="contest-name">The Breeze Zodiac IX</h3>
                            <p>This competition has a maximum of 29994 entries.</p>
                            <div class="contest-num">Contest no: <span>B2T</span></div>
                            <h4>Tickets Sold</h4>
                            <div class="ticket-amount">
                                <span class="left">0</span>
                                <span class="right">29994</span>
                                <div class="progressbar" data-perc="70%">
                                    <div class="bar"></div>
                                </div>
                                <p>Only 12045 remaining!</p>
                            </div>
                            <div class="ticket-price">
                                <span class="amount">$4.99</span>
                                <small>Per ticket</small>
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-30">
                                <!-- <div class="select-quantity">
                      <span class="caption">Quantity</span>
                      <div class="quantity">
                        <input type="number" min="0" max="100" step="1" value="16" readonly>
                      </div> -->
                            </div><!-- select-quantity end -->
                            <div class="mt-sm-0 mt-3"><a href="#0" class="cmn-btn style--three">buy tickets</a></div>
                        </div>
                        <ul class="social-links align-items-center">
                            <li>Share :</li>
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div><!-- contest-cart__right end -->
                </div><!-- contest-cart end -->
            </div><!-- col-lg-12 end -->
            <div class="col-lg-10">
                <div class="contest-description">
                    <ul class="nav nav-tabs justify-content-center mb-30 pb-4 border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn active" id="description-tab" data-bs-toggle="tab"
                                data-bs-target="#description" role="tab" aria-controls="description"
                                aria-selected="true"><span class="mr-3"></span>
                                description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn" id="details-tab" data-bs-toggle="tab" data-bs-target="#details"
                                role="tab" aria-controls="details" aria-selected="false"><span
                                    class="mr-3"></span>competition details</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="content-block">
                                <h3 class="title">Vehicle Overview</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex eget mi sollicitudin
                                    consequat. Sed rhoncus ligula vel justo dignissim aliquam. Maecenas non est vitae ipsum
                                    luctus
                                    feugiat. Fusce purus nunc, sodales at condimentum sed, ullamcorper a nulla. Nam justo
                                    est,
                                    venenatis quis tellus in, volutpat eleifend nunc. Vestibulum congue laoreet mi non
                                    interdum. Ut ut
                                    dapibus tellus.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                            <div class="content-block">
                                <h3 class="title">Competition Details</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex eget mi sollicitudin
                                    consequat. Sed rhoncus ligula vel justo dignissim aliquam. Maecenas non est vitae ipsum
                                    luctus
                                    feugiat. Fusce purus nunc, sodales at condimentum sed, ullamcorper a nulla. Nam justo
                                    est,
                                    venenatis quis tellus in, volutpat eleifend nunc. Vestibulum congue laoreet mi non
                                    interdum. Ut ut
                                    dapibus tellus.</p>
                            </div><!-- content-block end -->
                        </div>
                    </div><!-- tab-content end -->
                </div><!-- contest-description end -->
            </div>
        </div>
        </div>
    </section>

    <div class="fixed-bottom bottom-bar">
        <div class="container">
            <div class="row text-center">
                <div class="col-3">
                    <a href="#">
                        <i class="fas fa-home"></i>
                        <span class="icon-text">Home</span>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span class="icon-text">Profile</span>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        <i class="fas fa-wallet"></i>
                        <span class="icon-text">Wallet</span>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        <i class="fas fa-info-circle"></i>
                        <span class="icon-text">About</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
