<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon.png">
    <meta name="author" content="wpoceans">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/odometer-theme-default.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

</head>

<body>

<!-- Start header -->
        <header id="header" class="tp-site-header header-style-2">
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route('go-home')}}"><img src="{{asset('/assets/images/logo/logo.png')}}" alt="logo">Khai<span>rah.</span></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a class="active" href="{{route('go-home')}}">Home</a>
                            </li>
                            <li><a href="{{route('go-about')}}">About</a></li>
                            <li class="menu-item-has-children">
                                <a href="{{route('go-causes')}}">Causes</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('go-events')}}">Events</a>
                            </li>
                            <li>
                                <a href="{{route('go-contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    <div class="cart-search-contact">
                        <div class="header-search-form-wrapper">
                            <button class="search-toggle-btn"><i class="fi flaticon-magnifying-glass"></i></button>
                            <div class="header-search-form">
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <button type="submit"><i class="fi flaticon-magnifying-glass"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="vollenter-btn">
                            <a class="theme-btn-s2" href="{{route('go-volunteer')}}">Join a volunteer</a>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->
