@extends('layouts.app')
@section('content')
    <section class="hero">
        <div class="hero__shape"><img src="{{ asset('assets/images/elements/hero-shape.jpg.png') }}" alt="image">
        </div>
        <div class="hero__element"><img src="{{ asset('assets/images/elements/hero-building.png') }}" alt="image"></div>
        <div class="hero__car wow bounceIn" data-wow-duration="0.5s" data-wow-delay="1s">
            <img src="{{ asset('assets/images/elements/car-shadow.png') }}" alt="image" class="car-shadow">
            <img src="{{ asset('assets/images/elements/car-ray.png') }}" alt="image" class="car-ray">
            <img src="{{ asset('assets/images/elements/car-light.png') }}" alt="image" class="car-light">
            <img src="{{ asset('assets/images/elements/hero-car.png') }}" alt="image" class="hero-car">
            <img src="{{ asset('assets/images/elements/car-star.png') }}" alt="image" class="car-star">
        </div>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-lg-6 col-md-8">
                    <div class="hero__content">
                        <div class="hero__subtitle wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                            Contest FOR YOUR
                            CHANCE to</div>
                        <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">big
                            win</h2>
                        <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">Now's your chance
                            to win a car!
                            Check out the prestige cars you can win in our car prize draws. Will you be our next
                            lucky winner?</p>
                        <div class="hero__btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
                            <a href="contest.html" class="cmn-btn">Participate Now</a>
                            <a class="video-btn" href="https://www.youtube.com/embed/d6xn5uflUjg"
                                data-rel="lightcase:myCollection"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero__thumb">
                        <img src="{{ asset('assets/images/elements/car-main.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative z-index-two pt-120 pb-120 overflow-hidden">
        <div class="play-elements wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
            <img src="{{ asset('assets/images/elements/play-el.png') }}" alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-sm-start text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header">
                        <span class="section-sub-title">Need to know about</span>
                        <h2 class="section-title">How To Play</h2>
                        <p>Follow these 3 easy steps! </p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30 justify-content-xl-start justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="play-card bg_img" data-background="{{ asset('assets/images/elements/card-bg-1.jpg') }}">
                        <div class="play-card__icon">
                            <img src="{{ asset('assets/images/icon/play/1.png') }}" alt="image-icon">
                            <span class="play-card__number">01</span>
                        </div>
                        <div class="play-card__content">
                            <h3 class="play-card__title">Choose</h3>
                            <p>Register to DreemDraw & Choose your contest</p>
                        </div>
                    </div><!-- play-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="play-card bg_img" data-background="{{ asset('assets/images/elements/card-bg-2.jpg') }}">
                        <div class="play-card__icon">
                            <img src="{{ asset('assets/images/icon/play/2.png') }}" alt="image-icon">
                            <span class="play-card__number">02</span>
                        </div>
                        <div class="play-card__content">
                            <h3 class="play-card__title">buy</h3>
                            <p>Pick Your Numbers & Complete your Purchase</p>
                        </div>
                    </div><!-- play-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="play-card bg_img" data-background="{{ asset('assets/images/elements/card-bg-3.jpg') }}">
                        <div class="play-card__icon">
                            <img src="{{ asset('assets/images/icon/play/3.png') }}" alt="image-icon">
                            <span class="play-card__number">03</span>
                        </div>
                        <div class="play-card__content">
                            <h3 class="play-card__title">Win</h3>
                            <p>Start Dreaming, you're almost there</p>
                        </div>
                    </div><!-- play-card end -->
                </div>
            </div>
        </div>
    </section>
    <div class="col-lg-12 pt-120">
        <div class="pick-lottery-package">
            <h2 class="title">Featured Draws</h2>
            <div class="container mt-5">
                <div class="slider">
                    <div>
                        <div class="card">
                            <img src="https://via.placeholder.com/350x150/ff7f7f/333333?text=Card+Image+1"
                                class="card-img-top" alt="Card Image 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Card Title 1</h5>
                                <a href="#" class="btn btn-primary">Participate Now</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img src="https://via.placeholder.com/350x150/7f7fff/333333?text=Card+Image+2"
                                class="card-img-top" alt="Card Image 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Card Title 2</h5>
                                <a href="#" class="btn btn-primary">Participate Now</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img src="https://via.placeholder.com/350x150/7fff7f/333333?text=Card+Image+3"
                                class="card-img-top" alt="Card Image 3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Card Title 3</h5>
                                <a href="#" class="btn btn-primary">Participate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="position-relative pt-120 pb-120">
        <div class="bg-el"><img src="{{ asset('assets/images/elements/contest-bg.png') }}" alt="image">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Try your chance at winning</span>
                        <h2 class="section-title">Current Contest</h2>
                        <p>Participants buy tickets and lots are drawn to determine the winners.</p>
                    </div>
                </div>
            </div><!-- row end -->

            <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs justify-content-center mb-30 border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn style--two d-flex align-items-center active" id="home-tab"
                                data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="true">
                                <span class="me-3"><img src="{{ asset('assets/images/icon/btn/box.png') }}"
                                        alt="icon"></span> Daily
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="cmn-btn style--two d-flex align-items-center" id="profile-tab"
                                data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">
                                <span class="me-3"><img src="{{ asset('assets/images/icon/btn/box.png') }}"
                                        alt="icon"></span>Weakly
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="row mb-none-30">
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="contest-card">
                                        <a href="{{ route('detail') }}" class="item-link"></a>
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('assets/images/iphone.jpg') }}" alt="image">
                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                            <div class="contest-num">
                                                <span>contest no:</span>
                                                <h4 class="number">r9d</h4>
                                            </div>
                                        </div>
                                        <div class="contest-card__content">
                                            <div class="left">
                                                <h5 class="contest-card__name">Iphone 15 Pro Max</h5>
                                            </div>
                                            <div class="right">
                                                <span class="contest-card__price">$3.99</span>
                                                <p>ticket price</p>
                                            </div>
                                        </div>
                                        <div class="contest-card__footer">
                                            <ul class="contest-card__meta">
                                                <li>
                                                    <i class="las la-clock"></i>
                                                    <span>5d</span>
                                                </li>
                                                <li>
                                                    <i class="las la-ticket-alt"></i>
                                                    <span>9805</span>
                                                    <p>Remaining</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- contest-card end -->
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="contest-card">
                                        <a href="{{ route('detail') }}" class="item-link"></a>
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('assets/images/cash.png') }}" alt="image">
                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                            <div class="contest-num">
                                                <span>contest no:</span>
                                                <h4 class="number">pr2</h4>
                                            </div>
                                        </div>
                                        <div class="contest-card__content">
                                            <div class="left">
                                                <h5 class="contest-card__name">Cash Prize</h5>
                                            </div>
                                            <div class="right">
                                                <span class="contest-card__price">$2.0</span>
                                                <p>ticket price</p>
                                            </div>
                                        </div>
                                        <div class="contest-card__footer">
                                            <ul class="contest-card__meta">
                                                <li>
                                                    <i class="las la-clock"></i>
                                                    <span>5d</span>
                                                </li>
                                                <li>
                                                    <i class="las la-ticket-alt"></i>
                                                    <span>9805</span>
                                                    <p>Remaining</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- contest-card end -->
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="contest-card">
                                        <a href="{{ route('detail') }}" class="item-link"></a>
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('assets/images/bike.png') }}" alt="image">
                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                            <div class="contest-num">
                                                <span>contest no:</span>
                                                <h4 class="number">w03</h4>
                                            </div>
                                        </div>
                                        <div class="contest-card__content">
                                            <div class="left">
                                                <h5 class="contest-card__name">Red Bike</h5>
                                            </div>
                                            <div class="right">
                                                <span class="contest-card__price">$5</span>
                                                <p>ticket price</p>
                                            </div>
                                        </div>
                                        <div class="contest-card__footer">
                                            <ul class="contest-card__meta">
                                                <li>
                                                    <i class="las la-clock"></i>
                                                    <span>5d</span>
                                                </li>
                                                <li>
                                                    <i class="las la-ticket-alt"></i>
                                                    <span>9805</span>
                                                    <p>Remaining</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- contest-card end -->
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="contest-card">
                                        <a href="{{ route('detail') }}" class="item-link"></a>
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('assets/images/iphone.jpg') }}" alt="image">
                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                            <div class="contest-num">
                                                <span>contest no:</span>
                                                <h4 class="number">r9d</h4>
                                            </div>
                                        </div>
                                        <div class="contest-card__content">
                                            <div class="left">
                                                <h5 class="contest-card__name">Iphone 15 Pro Max</h5>
                                            </div>
                                            <div class="right">
                                                <span class="contest-card__price">$3.99</span>
                                                <p>ticket price</p>
                                            </div>
                                        </div>
                                        <div class="contest-card__footer">
                                            <ul class="contest-card__meta">
                                                <li>
                                                    <i class="las la-clock"></i>
                                                    <span>5d</span>
                                                </li>
                                                <li>
                                                    <i class="las la-ticket-alt"></i>
                                                    <span>9805</span>
                                                    <p>Remaining</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- contest-card end -->
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="contest-card">
                                        <a href="{{ route('detail') }}" class="item-link"></a>
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('assets/images/cash.png') }}" alt="image">
                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                            <div class="contest-num">
                                                <span>contest no:</span>
                                                <h4 class="number">pr2</h4>
                                            </div>
                                        </div>
                                        <div class="contest-card__content">
                                            <div class="left">
                                                <h5 class="contest-card__name">Cash Prize</h5>
                                            </div>
                                            <div class="right">
                                                <span class="contest-card__price">$2.0</span>
                                                <p>ticket price</p>
                                            </div>
                                        </div>
                                        <div class="contest-card__footer">
                                            <ul class="contest-card__meta">
                                                <li>
                                                    <i class="las la-clock"></i>
                                                    <span>5d</span>
                                                </li>
                                                <li>
                                                    <i class="las la-ticket-alt"></i>
                                                    <span>9805</span>
                                                    <p>Remaining</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- contest-card end -->
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="contest-card">
                                        <a href="{{ route('detail') }}" class="item-link"></a>
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('assets/images/bike.png') }}" alt="image">
                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                            <div class="contest-num">
                                                <span>contest no:</span>
                                                <h4 class="number">w03</h4>
                                            </div>
                                        </div>
                                        <div class="contest-card__content">
                                            <div class="left">
                                                <h5 class="contest-card__name">Red Bike</h5>
                                            </div>
                                            <div class="right">
                                                <span class="contest-card__price">$5</span>
                                                <p>ticket price</p>
                                            </div>
                                        </div>
                                        <div class="contest-card__footer">
                                            <ul class="contest-card__meta">
                                                <li>
                                                    <i class="las la-clock"></i>
                                                    <span>5d</span>
                                                </li>
                                                <li>
                                                    <i class="las la-ticket-alt"></i>
                                                    <span>9805</span>
                                                    <p>Remaining</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- contest-card end -->
                                </div>
                                {{-- <div class="col-xl-4 col-md-6 mb-30">
                    <div class="contest-card">
                      <a href="{{ route('detail') }}" class="item-link"></a>
                      <div class="contest-card__thumb">
                        <img src="{{ asset('assets/images/contest/1.png') }}" alt="image">
                        <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                        <div class="contest-num">
                          <span>contest no:</span>
                          <h4 class="number">b2t</h4>
                        </div>
                      </div>
                      <div class="contest-card__content">
                        <div class="left">
                          <h5 class="contest-card__name">The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span class="contest-card__price">$3.99</span>
                          <p>ticket price</p>
                        </div>
                      </div>
                      <div class="contest-card__footer">
                        <ul class="contest-card__meta">
                          <li>
                            <i class="las la-clock"></i>
                            <span>5d</span>
                          </li>
                          <li>
                            <i class="las la-ticket-alt"></i>
                            <span>9805</span>
                            <p>Remaining</p>
                          </li>
                        </ul>
                      </div>
                    </div><!-- contest-card end -->
                  </div>
                  <div class="col-xl-4 col-md-6 mb-30">
                    <div class="contest-card">
                      <a href="{{ route('detail') }}" class="item-link"></a>
                      <div class="contest-card__thumb">
                        <img src="{{ asset('assets/images/contest/2.png') }}" alt="image">
                        <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                        <div class="contest-num">
                          <span>contest no:</span>
                          <h4 class="number">x9u</h4>
                        </div>
                      </div>
                      <div class="contest-card__content">
                        <div class="left">
                          <h5 class="contest-card__name">The Del Sol Trailblazer</h5>
                        </div>
                        <div class="right">
                          <span class="contest-card__price">$3.99</span>
                          <p>ticket price</p>
                        </div>
                      </div>
                      <div class="contest-card__footer">
                        <ul class="contest-card__meta">
                          <li>
                            <i class="las la-clock"></i>
                            <span>5d</span>
                          </li>
                          <li>
                            <i class="las la-ticket-alt"></i>
                            <span>9805</span>
                            <p>Remaining</p>
                          </li>
                        </ul>
                      </div>
                    </div><!-- contest-card end -->
                  </div>
                  <div class="col-xl-4 col-md-6 mb-30">
                    <div class="contest-card">
                      <a href="{{ route('detail') }}" class="item-link"></a>
                      <div class="contest-card__thumb">
                        <img src="{{ asset('assets/images/contest/3.png') }}" alt="image">
                        <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                        <div class="contest-num">
                          <span>contest no:</span>
                          <h4 class="number">8y3</h4>
                        </div>
                      </div>
                      <div class="contest-card__content">
                        <div class="left">
                          <h5 class="contest-card__name">The Miata Dart IV</h5>
                        </div>
                        <div class="right">
                          <span class="contest-card__price">$3.99</span>
                          <p>ticket price</p>
                        </div>
                      </div>
                      <div class="contest-card__footer">
                        <ul class="contest-card__meta">
                          <li>
                            <i class="las la-clock"></i>
                            <span>5d</span>
                          </li>
                          <li>
                            <i class="las la-ticket-alt"></i>
                            <span>9805</span>
                            <p>Remaining</p>
                          </li>
                        </ul>
                      </div>
                    </div><!-- contest-card end -->
                  </div>
                  <div class="col-xl-4 col-md-6 mb-30">
                    <div class="contest-card">
                      <a href="{{ route('detail') }}" class="item-link"></a>
                      <div class="contest-card__thumb">
                        <img src="{{ asset('assets/images/contest/4.png') }}" alt="image">
                        <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                        <div class="contest-num">
                          <span>contest no:</span>
                          <h4 class="number">r9d</h4>
                        </div>
                      </div>
                      <div class="contest-card__content">
                        <div class="left">
                          <h5 class="contest-card__name">The Fabia Magnum</h5>
                        </div>
                        <div class="right">
                          <span class="contest-card__price">$3.99</span>
                          <p>ticket price</p>
                        </div>
                      </div>
                      <div class="contest-card__footer">
                        <ul class="contest-card__meta">
                          <li>
                            <i class="las la-clock"></i>
                            <span>5d</span>
                          </li>
                          <li>
                            <i class="las la-ticket-alt"></i>
                            <span>9805</span>
                            <p>Remaining</p>
                          </li>
                        </ul>
                      </div>
                    </div><!-- contest-card end -->
                  </div>
                  <div class="col-xl-4 col-md-6 mb-30">
                    <div class="contest-card">
                      <a href="{{ route('detail') }}" class="item-link"></a>
                      <div class="contest-card__thumb">
                        <img src="{{ asset('assets/images/contest/5.png') }}" alt="image">
                        <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                        <div class="contest-num">
                          <span>contest no:</span>
                          <h4 class="number">pr2</h4>
                        </div>
                      </div>
                      <div class="contest-card__content">
                        <div class="left">
                          <h5 class="contest-card__name">The Omega Navigator</h5>
                        </div>
                        <div class="right">
                          <span class="contest-card__price">$3.99</span>
                          <p>ticket price</p>
                        </div>
                      </div>
                      <div class="contest-card__footer">
                        <ul class="contest-card__meta">
                          <li>
                            <i class="las la-clock"></i>
                            <span>5d</span>
                          </li>
                          <li>
                            <i class="las la-ticket-alt"></i>
                            <span>9805</span>
                            <p>Remaining</p>
                          </li>
                        </ul>
                      </div>
                    </div><!-- contest-card end -->
                  </div>
                  <div class="col-xl-4 col-md-6 mb-30">
                    <div class="contest-card">
                      <a href="{{ route('detail') }}" class="item-link"></a>
                      <div class="contest-card__thumb">
                        <img src="{{ asset('assets/images/contest/6.png') }}" alt="image">
                        <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                        <div class="contest-num">
                          <span>contest no:</span>
                          <h4 class="number">w03</h4>
                        </div>
                      </div>
                      <div class="contest-card__content">
                        <div class="left">
                          <h5 class="contest-card__name">Shelby Cobra</h5>
                        </div>
                        <div class="right">
                          <span class="contest-card__price">$3.99</span>
                          <p>ticket price</p>
                        </div>
                      </div>
                      <div class="contest-card__footer">
                        <ul class="contest-card__meta">
                          <li>
                            <i class="las la-clock"></i>
                            <span>5d</span>
                          </li>
                          <li>
                            <i class="las la-ticket-alt"></i>
                            <span>9805</span>
                            <p>Remaining</p>
                          </li>
                        </ul>
                      </div>
                    </div><!-- contest-card end -->
                  </div> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="row mb-none-30">
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="contest-card">
                                        <a href="{{ route('detail') }}" class="item-link"></a>
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('assets/images/iphone.jpg') }}" alt="image">
                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                            <div class="contest-num">
                                                <span>contest no:</span>
                                                <h4 class="number">r9d</h4>
                                            </div>
                                        </div>
                                        <div class="contest-card__content">
                                            <div class="left">
                                                <h5 class="contest-card__name">Iphone 15 Pro Max</h5>
                                            </div>
                                            <div class="right">
                                                <span class="contest-card__price">$3.99</span>
                                                <p>ticket price</p>
                                            </div>
                                        </div>
                                        <div class="contest-card__footer">
                                            <ul class="contest-card__meta">
                                                <li>
                                                    <i class="las la-clock"></i>
                                                    <span>5d</span>
                                                </li>
                                                <li>
                                                    <i class="las la-ticket-alt"></i>
                                                    <span>9805</span>
                                                    <p>Remaining</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- contest-card end -->
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="contest-card">
                                        <a href="{{ route('detail') }}" class="item-link"></a>
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('assets/images/cash.png') }}" alt="image">
                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                            <div class="contest-num">
                                                <span>contest no:</span>
                                                <h4 class="number">pr2</h4>
                                            </div>
                                        </div>
                                        <div class="contest-card__content">
                                            <div class="left">
                                                <h5 class="contest-card__name">Cash Prize</h5>
                                            </div>
                                            <div class="right">
                                                <span class="contest-card__price">$2.0</span>
                                                <p>ticket price</p>
                                            </div>
                                        </div>
                                        <div class="contest-card__footer">
                                            <ul class="contest-card__meta">
                                                <li>
                                                    <i class="las la-clock"></i>
                                                    <span>5d</span>
                                                </li>
                                                <li>
                                                    <i class="las la-ticket-alt"></i>
                                                    <span>9805</span>
                                                    <p>Remaining</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- contest-card end -->
                                </div>
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="contest-card">
                                        <a href="{{ route('detail') }}" class="item-link"></a>
                                        <div class="contest-card__thumb">
                                            <img src="{{ asset('assets/images/bike.png') }}" alt="image">
                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                            <div class="contest-num">
                                                <span>contest no:</span>
                                                <h4 class="number">w03</h4>
                                            </div>
                                        </div>
                                        <div class="contest-card__content">
                                            <div class="left">
                                                <h5 class="contest-card__name">Red Bike</h5>
                                            </div>
                                            <div class="right">
                                                <span class="contest-card__price">$5</span>
                                                <p>ticket price</p>
                                            </div>
                                        </div>
                                        <div class="contest-card__footer">
                                            <ul class="contest-card__meta">
                                                <li>
                                                    <i class="las la-clock"></i>
                                                    <span>5d</span>
                                                </li>
                                                <li>
                                                    <i class="las la-ticket-alt"></i>
                                                    <span>9805</span>
                                                    <p>Remaining</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- contest-card end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end-->
            <div class="row mt-30">
                <div class="col-lg-12">
                    <div class="btn-grp">
                        <a href="contest.html" class="btn-border">browse more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="overview-section pt-120">
        <div class="map-el"><img src="{{ asset('assets/images/elements/map.png') }}" alt="image"></div>
        <div class="obj-1"><img src="{{ asset('assets/images/elements/overview-obj-1.png') }}" alt="image">
        </div>
        <div class="obj-2"><img src="{{ asset('assets/images/elements/overview-obj-2.png') }}" alt="image">
        </div>
        <div class="obj-3"><img src="{{ asset('assets/images/elements/overview-obj-3.png') }}" alt="image">
        </div>
        <div class="obj-4"><img src="{{ asset('assets/images/elements/overview-obj-4.png') }}" alt="image">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Our Users Around the World</span>
                        <h2 class="section-title">Let the number speak for us</h2>
                        <p>Over the years we have provided millions of players with tickets to lotteries across the
                            globe and
                            enjoyed having more than one million winners</p>
                    </div>
                </div>
            </div><!-- row end -->
        </div><!-- container end -->
        <div class="map-pointer">
            <div class="pointer num-1"></div>
            <div class="pointer num-2"></div>
            <div class="pointer num-3"></div>
            <div class="pointer num-4"></div>
            <div class="pointer num-5"></div>
            <div class="pointer num-6"></div>
            <div class="pointer num-7"></div>
            <div class="pointer num-8"></div>
            <div class="pointer num-9"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-none-30">
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                            <img src="{{ asset('assets/images/icon/overview/1.png') }}" alt="">
                        </div>
                        <div class="overview-card__content">
                            <span class="number">12000+</span>
                            <p>Verified Users</p>
                        </div>
                    </div><!-- overview-card end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                            <img src="{{ asset('assets/images/icon/overview/2.png') }}" alt="">
                        </div>
                        <div class="overview-card__content">
                            <span class="number">13</span>
                            <p>Years on the market</p>
                        </div>
                    </div><!-- overview-card end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                            <img src="{{ asset('assets/images/icon/overview/3.png') }}" alt="">
                        </div>
                        <div class="overview-card__content">
                            <span class="number">98%</span>
                            <p>Customer Satisfaction</p>
                        </div>
                    </div><!-- overview-card end -->
                </div>
            </div>
        </div><!-- container end -->
    </section>
@endsection
