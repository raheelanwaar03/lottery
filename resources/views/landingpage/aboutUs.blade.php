@extends('layouts.app')
@section('content')
    <div class="inner-hero-section style--four">
        <div class="bg-shape"><img src="assets/images/elements/inner-hero-shape-2.png" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#0">{{ env('APP_NAME') }}</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-minus-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-wrapper pt-120">
                        <div class="about-wrapper__header">
                            <div class="about-wrapper__title-top">A few words about us</div>
                            <h2 class="about-wrapper__title">We dream big so you can win big</h2>
                        </div>
                        <div class="about-wrapper__content">
                            <p>We're bold in our ambition: to be the world's biggest and best online lottery platform. We're
                                for every player that's ever dreamed of hitting the jackpot, which is why we bring you the
                                biggest prizes from around the world and offer you tons of ways to play. Our aim is to offer
                                unprecedented variety as well as quality.</p>
                            <p>Our team of creative programmers, marketing experts, and members of the global lottery
                                community have worked together to build the ultimate lottery site, and every win and happy
                                customer reminds us how lucky we are to be doing what we love.</p>
                        </div>
                    </div><!-- about-wrapper-->
                    <div class="row counter-wrapper style--two justify-content-center">
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="counter-item style--two">
                                <div class="counter-item__content">
                                    <span>23</span>
                                    <p>Winners For Last Month</p>
                                </div>
                            </div>
                        </div><!-- counter-item end -->
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="counter-item style--two">
                                <div class="counter-item__content">
                                    <span>2837K</span>
                                    <p>Tickets Sold</p>
                                </div>
                            </div>
                        </div><!-- counter-item end -->
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="counter-item style--two">
                                <div class="counter-item__content">
                                    <span>28387K</span>
                                    <p>Payouts to Winners</p>
                                </div>
                            </div>
                        </div><!-- counter-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- features section start -->
    <section class="pt-120 pb-120 position-relative">
        <div class="feature-car">
            <img src="assets/images/elements/feature-car.png" alt="image">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <span class="section-sub-title">An Exhaustive list of amazing features</span>
                        <h2 class="section-title style--two">What makes Rifa different?</h2>
                        <p>These are the key drivers that make us different: Safe, Social, Reliable and Fun. Rifa Lotto is
                            dedicated to trust and safety.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-9">
                    <div class="row mb-none-30">
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="feature-card style--two">
                                <div class="feature-card__icon">
                                    <div class="inner"><img src="assets/images/icon/feature/5.png" alt="image"></div>
                                </div>
                                <div class="feature-card__content">
                                    <h3>No Commission on Winnings</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="feature-card style--two">
                                <div class="feature-card__icon">
                                    <div class="inner"><img src="assets/images/icon/feature/6.png" alt="image"></div>
                                </div>
                                <div class="feature-card__content">
                                    <h3> Safe and Secure Playing</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="feature-card style--two">
                                <div class="feature-card__icon">
                                    <div class="inner"><img src="assets/images/icon/feature/7.png" alt="image"></div>
                                </div>
                                <div class="feature-card__content">
                                    <h3>Biggest lottery jackpots</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="feature-card style--two">
                                <div class="feature-card__icon">
                                    <div class="inner"><img src="assets/images/icon/feature/8.png" alt="image"></div>
                                </div>
                                <div class="feature-card__content">
                                    <h3>Instant payout system</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="feature-card style--two">
                                <div class="feature-card__icon">
                                    <div class="inner"><img src="assets/images/icon/feature/9.png" alt="image"></div>
                                </div>
                                <div class="feature-card__content">
                                    <h3>Dedicated Support</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="feature-card style--two">
                                <div class="feature-card__icon">
                                    <div class="inner"><img src="assets/images/icon/feature/10.png" alt="image"></div>
                                </div>
                                <div class="feature-card__content">
                                    <h3>Unlimited Affiliates</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- features section end -->

    <!-- testimonial section start -->
    <section class="has-bg--shape pt-120 pb-120">
        <div class="bg-shape">
            <div class="round-shape d-sm-block d-none"><img src="assets/images/elements/round-shape.png" alt="image">
            </div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="shape-3"></div>
            <div class="shape-4"></div>
            <div class="shape-5"></div>
            <div class="shape-6"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-xl-8 col-lg-9">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Testimonial</span>
                        <h2 class="section-title">our Happy Customers All Around the World</h2>
                        <p>With over 12 years of experience as the world’s leading online lottery service provider. Find out
                            what our members have to say about us!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-area bg_img" data-background="assets/images/elements/testimonial-single.jpg">
                        <div class="testimonial-slider">
                            <div class="testimonial-single">
                                <div class="testimonial-single__thumb">
                                    <img src="assets/images/winner/2.png" alt="image">
                                </div>
                                <div class="testimonial-single__content">
                                    <h4 class="client-name">Dave Ford</h4>
                                    <p>“Unbelievable this is a dream come true,no way would I ever think I would own a car
                                        like this” </p>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div><!-- testimonial-single end -->
                            <div class="testimonial-single">
                                <div class="testimonial-single__thumb">
                                    <img src="assets/images/winner/1.png" alt="image">
                                </div>
                                <div class="testimonial-single__content">
                                    <h4 class="client-name">Dave Ford</h4>
                                    <p>“Unbelievable this is a dream come true,no way would I ever think I would own a car
                                        like this” </p>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div><!-- testimonial-single end -->
                        </div><!-- testimonial-slider end -->
                    </div><!-- testimonial-area end -->
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

    <!-- team section start -->
    <section class="pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-header text-center">
                        <span class="section-sub-title"> Meet Our most Valued</span>
                        <h2 class="section-title style--two">Expert Team Members</h2>
                        <p>These are the key drivers that make us different: Safe, Social, Reliable and Fun. Rifa Lotto is
                            dedicated to trust and safety.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30 justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/team/1.png" alt="image">
                            <div class="obj"><img src="assets/images/elements/team-obj.png" alt="image"></div>
                        </div>
                        <div class="team-card__content">
                            <h3 class="name">Nicolas Hopkins</h3>
                            <span class="designation">CEO</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/team/2.png" alt="image">
                            <div class="obj"><img src="assets/images/elements/team-obj.png" alt="image"></div>
                        </div>
                        <div class="team-card__content">
                            <h3 class="name">Orlando Mills</h3>
                            <span class="designation">CTO</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="team-card">
                        <div class="team-card__thumb">
                            <img src="assets/images/team/3.png" alt="image">
                            <div class="obj"><img src="assets/images/elements/team-obj.png" alt="image"></div>
                        </div>
                        <div class="team-card__content">
                            <h3 class="name">Israel Boone</h3>
                            <span class="designation">VP, Lottery Operations</span>
                        </div>
                    </div><!-- team-card end -->
                </div>
            </div>
        </div>
    </section>
@endsection
