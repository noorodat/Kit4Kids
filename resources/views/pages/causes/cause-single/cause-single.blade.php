@extends('layouts.master')

@section('title', 'Kit')

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
                                <h2>Single Kit</h2>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('go-home')}}">Home</a></li>
                                    <li>Kit</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- tp-event-details-area start -->
        <div class="tp-case-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="tp-case-details-wrap">
                            <div class="tp-case-details-text">
                                <div id="Description">
                                    <div class="tp-case-details-img">
                                        <img src="data:image/png;base64,{{ $kit->image }}" alt="">
                                    </div>
                                    <div class="tp-case-content">
                                        <div class="tp-case-text-top">
                                            <h2>{{$kit->title}}</h2>
                                            <div class="case-b-text">
                                                <p>{{$kit->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Will discuss this with the team --}}
                                    {{-- <div class="case-bb-text">
                                        <h4>This package includes:</h4>
                                        <ul>
                                            <li>The wise man therefore always holds in these matters.</li>
                                            <li>In a free hour, when our power of choice and when nothing.</li>
                                            <li>Else he endures pains to avoid worse pains.</li>
                                            <li>We denounce with righteous indignation and dislike men. </li>
                                            <li>Which is the same as saying through.</li>
                                        </ul>
                                    </div> --}}
                                    <div class="submit-area sub-btn">
                                        <a href="{{ route('go-donate', ['kit_id' => $kit->id]) }}" class="theme-btn submit-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4 col-sm-12">
                        <div class="tp-blog-sidebar">
                            <div class="widget recent-post-widget">
                                <h3>More</h3>
                                <div class="posts">
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{asset('assets/images/recent-posts/img-1.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Many Children are suffering a lot for food.</a></h4>
                                            <span class="date">22 Sep 2020</span>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{asset('assets/images/recent-posts/img-2.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Be kind for the poor people and the kids.</a></h4>
                                            <span class="date">22 Sep 2020</span>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{asset('assets/images/recent-posts/img-3.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Be soft and kind for the poor people.</a></h4>
                                            <span class="date">22 Sep 2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-event-details-area end -->

    </div>

    @endsection



