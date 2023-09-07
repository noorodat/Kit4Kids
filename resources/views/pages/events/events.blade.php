@extends('layouts.master')

@section('title', 'Events')

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

        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Our Events</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Events</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
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
                            <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="event-item">
                            <div class="event-img">
                                <img src="{{asset('assets/images/event/1.jpg')}}" alt="">
                            </div>
                            <div class="event-text">
                                <div class="event-left">
                                    <div class="event-l-text">
                                        <span>MAR</span>
                                        <h4>28</h4>
                                    </div>
                                </div>
                                <div class="event-right">
                                    <ul>
                                        <li><i class="ti-location-pin"></i> 9:00 AM - 10:00 AM</li>
                                        <li><i class="ti-location-pin"></i> 968, Mudkarim, Pakistan.</li>
                                    </ul>
                                    <h2><a href="event-single.html">Fundrising event that could change some poor children.</a></h2>
                                    <p>It is long estblished fact that a reader will be distracted aliquip exea commodo consequat velit esse cillum fugiat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="event-img">
                                <img src="{{asset('assets/images/event/2.jpg')}}" alt="">
                            </div>
                            <div class="event-text">
                                <div class="event-left">
                                    <div class="event-l-text">
                                        <span>MAR</span>
                                        <h4>28</h4>
                                    </div>
                                </div>
                                <div class="event-right">
                                    <ul>
                                        <li><i class="ti-location-pin"></i> 9:00 AM - 10:00 AM</li>
                                        <li><i class="ti-location-pin"></i> 968, Mudkarim, Pakistan.</li>
                                    </ul>
                                    <h2><a href="event-single.html">Many Children are suffering a lot for food.</a></h2>
                                    <p>It is long estblished fact that a reader will be distracted aliquip exea commodo consequat velit esse cillum fugiat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="event-img">
                                <img src="{{asset('assets/images/event/3.jpg')}}" alt="">
                            </div>
                            <div class="event-text">
                                <div class="event-left">
                                    <div class="event-l-text">
                                        <span>MAR</span>
                                        <h4>28</h4>
                                    </div>
                                </div>
                                <div class="event-right">
                                    <ul>
                                        <li><i class="ti-location-pin"></i> 9:00 AM - 10:00 AM</li>
                                        <li><i class="ti-location-pin"></i> 968, Mudkarim, Pakistan.</li>
                                    </ul>
                                    <h2><a href="event-single.html">Be kind for the poor people and the kids.</a></h2>
                                    <p>It is long estblished fact that a reader will be distracted aliquip exea commodo consequat velit esse cillum fugiat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape1"><img src="{{asset('assets/images/event/1.png')}}" alt=""></div>
            <div class="shape2"><img src="{{asset('assets/images/event/2.png')}}" alt=""></div>
        </div>
        <!-- event-area start -->

    </div>
    <!-- end of page-wrapper -->


    @endsection