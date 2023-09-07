@extends('layouts.master')

@section('title', 'Events')

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

        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Become a Volunteer</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Volunteer</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- volunteer-area-start -->
        <div class="volunteer-area ">
            <div class="volunteer-wrap section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="section-title section-title2 text-center">
                                <div class="thumb-text">
                                    <span>Volunteer</span>
                                </div>
                                <h2>Become a Volunteer</h2>
                                <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="volunteer-item">
                                <div class="volunteer-img-wrap">
                                    <div class="volunter-img">
                                        <img src="{{asset('assets/images/volunteer.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="volunteer-contact">
                                <div class="volunteer-contact-form">
                                    <form method="post" class="contact-validation-active" id="contact-form">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="First Name">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                                <label for="file">Upload Your CV</label>
                                                <input id="file" type="file" class="form-control" name="file">
                                                <i class="ti-cloud-up"></i>
                                            </div>
                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="note" id="note" placeholder="Case Description..."></textarea>
                                            </div>
                                            <div class="submit-area col-lg-12 col-12">
                                                <button type="submit" class="theme-btn submit-btn">Send Message</button>
                                                <div id="loader">
                                                    <i class="ti-reload"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix error-handling-messages">
                                            <div id="success">Thank you</div>
                                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- volunteer-area start -->
            <div class="volunteer-area v2 section-padding">
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
                                        <img src="{{asset('assets/images/team/1.png')}}" alt="">
                                    </div>
                                    <div class="volunteer-content">
                                        <h2><a href="#">Adriane Newby</a></h2>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-3 col-sm-6 custom-grid col-12">
                                <div class="volunteer-item">
                                    <div class="volunteer-img">
                                        <img src="{{asset('assets/images/team/2.png')}}" alt="">
                                    </div>
                                    <div class="volunteer-content">
                                        <h2><a href="#">Allene Castaneda</a></h2>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-3 col-sm-6 custom-grid col-12">
                                <div class="volunteer-item">
                                    <div class="volunteer-img">
                                        <img src="{{asset('assets/images/team/3.png')}}" alt="">
                                    </div>
                                    <div class="volunteer-content">
                                        <h2><a href="#">Malinda Willoughby</a></h2>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-3 col-sm-6 custom-grid col-12">
                                <div class="volunteer-item">
                                    <div class="volunteer-img">
                                        <img src="{{asset('assets/images/team/4.png')}}" alt="">
                                    </div>
                                    <div class="volunteer-content">
                                        <h2><a href="#">Wilburn Hatfield</a></h2>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- volunteer-area start -->
        </div>
        <!-- volunteer-area-end -->
    </div>
    <!-- end of page-wrapper -->


    @endsection
