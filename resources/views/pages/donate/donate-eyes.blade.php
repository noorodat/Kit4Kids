@extends('layouts.master')

@section('title', 'Donate supplies')

@section('supply')
   class="active"
@endsection

@section('content')

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
                                <h2>Donate Now</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Donate</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- tp-event-area start -->
        <div class="tp-donation-page-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>Donate</span>
                            </div>
                            <h2>Make a Donation</h2>
                            {{-- <div class="image">
                                <img src="{{asset($campaign->image)}}" alt="" width="250px" style="padding: 10px">
                            </div> --}}
                            {{-- <p><b>{{ $campaign->title }}</b></p> --}}
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div id="Donations" class="tab-pane">

                            @if (Auth::id())
                                {{-- {{ session()->forget('Donate_login') }} --}}
                                <form action="{{ route('supplies') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tp-donations-details">
                                        <h2>Supplies Details</h2>
                                        <div class="row">

                                            <input type="hidden" id="" name="UserId" value="{{ Auth::id() }}">

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <!-- Input for title (string) -->
                                                <input type="text" class="form-control" name="title" id="title" required placeholder="Title">
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="number" class="form-control" name="phone" id="phone"
                                                required placeholder="Phone">
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="file" class="form-control" name="image" id="image" accept="image/*" required>
                                            </div>



                                            {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="adress" id="Adress"
                                                required placeholder="Adress">
                                            </div> --}}
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <select class="form-control" name="city" id="city" required>
                                                  <option value="" disabled selected>Select a city</option>
                                                  <option value="Amman">Amman</option>
                                                  <option value="Ajloun">Ajloun</option>
                                                  <option value="Jerash">Jerash</option>
                                                  <option value="Mafraq">Mafraq</option>
                                                  <option value="Balqa">Balqa</option>
                                                  <option value="Zarqa">Zarqa</option>
                                                  <option value="Madaba">Madaba</option>
                                                  <option value="Karak">Karak</option>
                                                  <option value="Tafilah">Tafilah</option>
                                                  <option value="Maan">Ma'an</option>
                                                  <option value="Aqaba">Aqaba</option>
                                                </select>
                                              </div>



                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea required class="form-control" name="Description" id="Description" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn submit-btn">Donate Now</button>
                                    </div>
                                </form>
                            @else
                                {{-- {{ session(['Donate_login' => $campaign]) }} --}}
                                {{-- return redirect()->route('login')->with('warning', 'Please login to continue donating.'); --}}
                                <div class="tp-donations-amount " style="text-align: center;">
                                    <h2 class="mx-auto" style="color: red;">please login to continue</h2>
                                    <a href="{{ route('donatelogin') }}" class="theme-btn-s3">LOGIN</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-event-area end -->

    </div>

@endsection

