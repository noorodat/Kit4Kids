@extends('layouts.master')

@section('title', 'Home')

@section('content')

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
        <!-- start of hero -->
        <section class="hero-slider hero-style-1 hero-style-v2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slider5.jpg">
                            <div class="container">
                                <div data-swiper-parallax="200" class="slide-thumb">
                                    <span>GO FOR HELP</span>
                                </div>
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Helping hands, happy hearts.</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Join our dedicated team of volunteers and make a difference in the lives of students.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="slide-shape">
                                <img src="assets/images/shape/shape.png" alt="">
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slider6.jpg">
                            <div class="container">
                                <div data-swiper-parallax="200" class="slide-thumb">
                                    <span>GO FOR HELP</span>
                                </div>
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Volunteers inspire greatness.</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>"Help shape the future of our students through your valuable contributions as a volunteer.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="slide-shape">
                                <img src="assets/images/shape/shape.png" alt="">
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slider4.jpg">
                            <div class="container">
                                <div data-swiper-parallax="200" class="slide-thumb">
                                    <span>GO FOR HELP</span>
                                </div>
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Give your time, change lives.</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Enrich your life while enriching the lives of students – volunteer with us today.</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="slide-shape">
                                <img src="assets/images/shape/shape.png" alt="">
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->
                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- end of hero slider -->
        <section class="about-section about-section-s2 section-padding p-t-0">
            <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div class="video-area">
                            <img src="assets/images/about/st.jpg" alt height="550px">
                            {{-- <div class="video-holder">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"><i class="fi flaticon-play"></i></a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <div class="about-text">
                            <div class="section-title">
                                <div class="thumb-text">
                                    <span>ABOUT US</span>
                                </div>
                                <h2>HopeHarbor is <span>Nonprofit</span> Organization <span>For Help</span> schoolchildren.</h2>
                            </div>
                            <p>HopeHarbor is a passionate nonprofit organization committed to making a positive difference in the lives of schoolchildren. Our mission is to provide hope, support, and opportunities for academic success to underserved students.</p>
                            <div class="ab-icon-area">
                                <div class="about-icon-wrap">
                                    <div class="about-icon-item">
                                        <div class="ab-icon">
                                            <img draggable="false" src="assets/images/about/6.png" alt="" style="padding: 6px">
                                        </div>
                                        <div class="ab-text">
                                            <h2><a href="causes-single.html">Save <br> Children.</a></h2>
                                        </div>
                                    </div>
                                    <div class="about-icon-item">
                                        <div class="ab-icon ab-icon2">
                                            <img draggable="false" src="assets/images/about/4.png" alt="">
                                        </div>
                                        <div class="ab-text">
                                            <h2><a href="causes-single.html">Save <br> Education.</a></h2>
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
        <div class="features-area features-area2">
            <div class="container">
                <div class="col-12">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="donate-categories">How do you want to help?</h2>
                        <div class="features-wrap">
                            <div class="row">
                                @foreach($catagories as $catagory)
                                    <a href="{{ route('go-causes', ['cat_id' => $catagory->id]) }}">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="features-item">
                                                <div class="features-icon">
                                                    <img draggable="false" src="{{$catagory->image}}" alt="">
                                                </div>-
                                                <div class="features-content">
                                                    <h2><a href="{{ route('go-causes', ['cat_id' => $catagory->id]) }}">{{$catagory->title}}</a></h2>
                                                </div>
                                                {{-- <div class="features-text1">{{$kit->description}}</div> --}}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features-area end -->
        <!-- case-area-start -->
        <div class="case-area section-padding">
            <div class="container">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title section-title2 text-center">
                        <div class="thumb-text">
                            <span>KITS</span>
                        </div>
                        <h2>Popular kits of HopeHarbor.</h2>
                        <p>Explore our selection of popular kits designed for volunteers who want to make a meaningful impact. These volunteer packages include essential resources and tools to support your volunteering efforts. Join us in making a difference in the community!</p>
                    </div>
                </div>
                {{-- <div class="row">
                    @foreach ($kits->take(9) as $kit)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="{{ asset('assets/images/cause/supply-kit.jpg') }}" alt="">
                                    <div class="case-btn">
                                        <a href="{{ route('go-donate', ['kit_id' => $kit->id]) }}" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="cause-text">
                                <ul>
                                    <li>
                                        <a href="{{ route('go-cause-single', ['kit' => $kit]) }}">{{ $kit->price }}</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{ route('go-cause-single', ['kit' => $kit]) }}">{{ $kit->title }}</a>
                                </h3>
                                <p>{{ $kit->description }}</p>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
                </div> --}}
            </div>
        </div>
        <!-- case-area-end -->
        <!-- cta-area start -->
        <div class="cta-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="cta-left">
                            <h2>If You Want To Join With Us As a Volunteer. Contact Us Today!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-offset-1 col-md-12 col-12">
                        <div class="cta-wrap">
                            <div class="cta-call">
                                <span>Call Us!</span>
                                <h3>0791757324</h3>
                            </div>
                            <div class="cta-call">
                                <span>E-mail Us!</span>
                                <h3>HopeHarbor@gmail.com</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta-area start -->
        <!-- event-area start -->
        <div class="event-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>EVENTS</span>
                            </div>
                            <h2>Our Upcoming Events</h2>
                            <p>Explore our exciting calendar of upcoming events that promise to bring inspiration, education, and joy to our community. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @foreach ($Campaigns->take(3) as $Campaign)
                        <div class="event-item">
                            <div class="event-img">
                                <img src="{{ $Campaign->image }}" alt="">
                            </div>
                            <div class="event-text">
                                <div class="event-left">
                                    <div class="event-l-text">
                                        @php
                                            $end_date = \Carbon\Carbon::parse($Campaign->end_date);
                                        @endphp
                                        <span> {{ $end_date->format('F') }}</span>
                                        <h4> {{ $end_date->format('d') }}</h4>
                                    </div>
                                </div>
                                <div class="event-right">
                                    <ul>
                                        <li>End Date:{{ $Campaign->end_date }}</li>
                                        <li>Target Money: ${{ $Campaign->target_money }}</li>
                                        <li style="margin-left:30px; ">Raised Money: ${{ $Campaign->raised_money }}</li>
                                    </ul>
                                    <h2><a href="event.html">{{ $Campaign->title }}</a></h2>
                                    <p>{{ $Campaign->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="shape1"><img src="assets/images/event/1.png" alt=""></div>
            <div class="shape2"><img src="assets/images/event/2.png" alt=""></div>
        </div>
        <!-- event-area start -->
        <!-- volunteer-area start -->
        {{-- <div class="volunteer-area section-padding">
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
                                    <img src="assets/images/team/1.png" alt="">
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
                                    <img src="assets/images/team/2.png" alt="">
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
                                    <img src="assets/images/team/3.png" alt="">
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
                                    <img src="assets/images/team/4.png" alt="">
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
        </div> --}}
        <!-- volunteer-area start -->
        <!-- start testimonials-section-s2 -->
        <section class="testimonials-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="testimonials-slider">
                            <div class="testimonial-thumb-active">
                                <div class="test-img">
                                    <img src="assets/images/team/img (5).png" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="assets/images/team/img (1).png" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="assets/images/team/img (2).png" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="assets/images/team/img (6).png" alt height="450px">
                                </div>
                                <div class="test-img">
                                    <img src="assets/images/team/img (4).png" alt height="450px">
                                </div>
                            </div>
                            <div class="testimonial-content-active text-center">
                                {{-- start --}}
                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to support a cause, organization, or community without expecting financial compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to make a positive impact on the world. They play a crucial role in various sectors, including nonprofit organizations, healthcare, education, environmental conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Razan Mustafa</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                                {{-- end --}}
                                {{-- start --}}
                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to support a cause, organization, or community without expecting financial compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to make a positive impact on the world. They play a crucial role in various sectors, including nonprofit organizations, healthcare, education, environmental conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Mohammad Alhouwari</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                                {{-- end --}}
                                {{-- start --}}
                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to support a cause, organization, or community without expecting financial compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to make a positive impact on the world. They play a crucial role in various sectors, including nonprofit organizations, healthcare, education, environmental conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Nooraldeen Aloudat</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                                {{-- end --}}
                                {{-- start --}}
                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to support a cause, organization, or community without expecting financial compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to make a positive impact on the world. They play a crucial role in various sectors, including nonprofit organizations, healthcare, education, environmental conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Raghad Bataineh</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                                {{-- end --}}
                                {{-- start --}}
                                <div class="grid">
                                    <p>A volunteer is an individual who willingly offers their time, skills, and efforts to support a cause, organization, or community without expecting financial compensation. Volunteers are driven by a sense of altruism, empathy, and a desire to make a positive impact on the world. They play a crucial role in various sectors, including nonprofit organizations, healthcare, education, environmental conservation, disaster relief, and more.</p>
                                    <div class="info">
                                        <h5>Lama Nazzal</h5>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                                {{-- end --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
            <div class="testi-shape">
                <img src="assets/images/testimonials/img-3.png" alt="">
            </div>
            <div class="testi-shape2">
                <img src="assets/images/ts.png" alt="">
            </div>
        </section>
        <!-- end testimonials-section-s2 -->
        <!-- blog-area start -->
        {{-- <div class="blog-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>Blog</span>
                            </div>
                            <h2>Our Latest News</h2>
                            <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="row">
                        <div class="col col-md-6 col-12">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="assets/images/blog/img-1.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <ul>
                                        <li>22 June, 2020</li>
                                        <li><i class="fa fa-heart" aria-hidden="true"></i>56</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i> 78</li>
                                    </ul>
                                    <h2><a href="blog.html">Best and less published their supplier lists.</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 col-12">
                            <div class="blog-item">
                                <div class="blog-content">
                                    <ul>
                                        <li>22 June, 2020</li>
                                        <li><i class="fa fa-heart" aria-hidden="true"></i>56</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i> 78</li>
                                    </ul>
                                    <h2><a href="blog.html">Best and less published their supplier lists.</a></h2>
                                </div>
                                <div class="blog-img">
                                    <img src="assets/images/blog/img-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 col-12">
                            <div class="blog-item">
                                <div class="blog-content">
                                    <ul>
                                        <li>22 June, 2020</li>
                                        <li><i class="fa fa-heart" aria-hidden="true"></i>56</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i> 78</li>
                                    </ul>
                                    <h2><a href="blog.html">Best and less published their supplier lists.</a></h2>
                                </div>
                                <div class="blog-img">
                                    <img src="assets/images/blog/img-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 col-12">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="assets/images/blog/img-4.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <ul>
                                        <li>22 June, 2020</li>
                                        <li><i class="fa fa-heart" aria-hidden="true"></i>56</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i> 78</li>
                                    </ul>
                                    <h2><a href="blog.html">Best and less published their supplier lists.</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- blog-area start -->
        <!-- start partners-section -->
        <section class="partners-section section-padding">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider">
                            @foreach ($Partners as $Partner)
                            <div class="grid">
                                <img src="{{$Partner->image}}" alt>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->

@endsection
