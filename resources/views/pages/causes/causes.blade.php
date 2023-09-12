@extends('layouts.master')

@section('title', 'Causes')

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
                                <h2>Kits</h2>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('go-home')}}">Home</a></li>
                                    <li>Kits</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- case-area-start -->
        <div class="case-area section-padding">
            <div class="container">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title section-title2 text-center">
                        <div class="thumb-text">
                            <span>Kits</span>
                        </div>
                        <h2>School Kits</h2>
                        <p>Donating school kits to poor students on our website empowers them with essential tools for learning and fosters educational equality, helping break the cycle of poverty through education.</p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($kits as $kit)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="{{ url('/images/' . $kit->image) }}" alt="">
                                    <div class="case-btn">
                                        <a href="{{ route('go-donate', ['kit' => $kit]) }}" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li>
                                        <a href="{{ route('go-cause-single', ['cat_id' => $cat_id, 'kit' => $kit]) }}">${{$kit->price}}</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{ route('go-cause-single', ['cat_id' => $cat_id, 'kit' => $kit]) }}">{{$kit->title}}</a>
                                </h3>
                                <p>{{ $kit->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
                <div class="pagination" style="display: flex; justify-content:center">
                    {{$kits->links()}}
                </div>

            </div>
        </div>
        <!-- case-area-end -->
    </div>



@endsection
