@extends('layouts.master')

@section('title', 'about us')

@section('content')

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->

        <!-- end of header -->
        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>About Us</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>About</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- end of hero slider -->
        <section class="about-section about-section-s2 section-padding p-t-0">
            <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div class="video-area">
                            <img src="{{asset('/assets/images/about.jpg')}}" alt>
                            <div class="video-holder">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"><i class="fi flaticon-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <div class="about-text">
                            <div class="section-title">
                                <div class="thumb-text">
                                    <span>ABOUT US</span>
                                </div>
                                <h2>Khairah is <span>Nonprofit</span> Organization <span>For Help</span> Children.</h2>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by thethe readable content off a page when looking at its layout point using Lorem Ipsum is that it has.</p>
                            <div class="ab-icon-area">
                                <div class="about-icon-wrap">
                                    <div class="about-icon-item">
                                        <div class="ab-icon">
                                            <img draggable="false" src="{{asset('/assets/images/about/1.png')}}" alt="">
                                        </div>
                                        <div class="ab-text">
                                            <h2><a href="causes-single.html">Save <br> Children.</a></h2>
                                        </div>
                                    </div>
                                    <div class="about-icon-item">
                                        <div class="ab-icon ab-icon2">
                                            <img draggable="false" src="{{asset('/assets/images/about/2.png')}}" alt="">
                                        </div>
                                        <div class="ab-text">
                                            <h2><a href="causes-single.html">Fresh And <br> Clean Water.</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section -->
        <!-- features-area start -->
        <div class="features-area">
            <div class="container">
                <div class="col-12">
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="features-text">
                            <div class="section-title">
                                <div class="thumb-text">
                                    <span>FEATURES</span>
                                </div>
                            </div>
                            <h2>The great journey to end poverty for good begins with a child.</h2>
                            <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point that it has.</p>
                            <a href="#" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="features-wrap">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="features-item">
                                        <div class="features-icon">
                                            <img draggable="false" src="{{asset('/assets/images/features/img-1.png')}}" alt="">
                                        </div>
                                        <div class="features-content">
                                            <h2><a href="causes-single.html">Cancer Treatment</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="features-item-2">
                                        <div class="features-icon">
                                            <img draggable="false" src="{{asset('/assets/images/features/img-2.png')}}" alt="">
                                        </div>
                                        <div class="features-content">
                                            <h2><a href="causes-single.html">Hospital Build</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="features-item-2 active">
                                        <div class="features-icon">
                                            <img draggable="false" src="{{asset('/assets/images/features/img-3.png')}}" alt="">
                                        </div>
                                        <div class="features-content">
                                            <h2><a href="causes-single.html">Environtment Recyle</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="features-item">
                                        <div class="features-icon">
                                            <img draggable="false" src="{{asset('/assets/images/features/img-4.png')}}" alt="">
                                        </div>
                                        <div class="features-content">
                                            <h2><a href="causes-single.html">Food & Build Home</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features-area end -->

        <!-- volunteer-area start -->
        <div class="volunteer-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>Volunteer</span>
                            </div>
                            <h2>Our Great Volunteer</h2>
                            <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                        </div>
                    </div>
                </div>
                <div class="volunteer-wrap">
                    <div class="row">
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="{{asset('/assets/images/team/1.png')}}" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="volunteer.html">Adriane Newby</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="{{asset('/assets/images/team/2.png')}}" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="volunteer.html">Allene Castaneda</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="{{asset('/assets/images/team/3.png')}}" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="volunteer.html">Malinda Willoughby</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="{{asset('/assets/images/team/4.png')}}" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="volunteer.html">Wilburn Hatfield</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- volunteer-area start -->
        <!-- start testimonials-section-s2 -->
        <section class="testimonials-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="testimonials-slider">
                            <div class="testimonial-thumb-active">
                                <div class="test-img">
                                    <img src="{{asset('/assets/images/testimonials/img-1.png')}}" alt="">
                                </div>
                                <div class="test-img">
                                    <img src="{{asset('/assets/images/testimonials/img-2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="testimonial-content-active text-center">
                                <div class="grid">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                    </ul>
                                    <p>“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a
                                        passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                                        in the middle of text all the loss.</p>
                                    <div class="info">
                                        <h5>Tawana Blackman</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                                <div class="grid">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                    </ul>
                                    <p>“Dicture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered”</p>
                                    <div class="info">
                                        <h5>Michel Jhone</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
            <div class="testi-shape">
                <img src="{{asset('/assets/images/testimonials/img-3.png')}}" alt="">
            </div>
            <div class="testi-shape2">
                <img src="{{asset('/assets/images/ts.png')}}" alt="">
            </div>
        </section>
        <!-- end testimonials-section-s2 -->
        <!-- .tp-counter-area start -->
        <div class="tp-counter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-counter-grids">
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="6200">00</span>+</h2>
                                </div>
                                <p>Donation</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="80">00</span>+</h2>
                                </div>
                                <p>Fund Raised</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="245">00</span>+</h2>
                                </div>
                                <p>Volunteers</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="605">00</span>+</h2>
                                </div>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-counter-area end -->
        <!-- start partners-section -->
        <section class="partners-section section-padding">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider">
                            <div class="grid">
                                <img src="{{asset('/assets/images/partners/1.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('/assets/images/partners/2.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('/assets/images/partners/3.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('/assets/images/partners/4.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('/assets/images/partners/5.png')}}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->
        <!-- start tp-site-footer -->

        <!-- end tp-site-footer -->
    </div>


@endsection