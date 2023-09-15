@extends('layouts.master')



@section('title', 'Donate Campaign')

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
                                    <li><a href="{{route('go-home')}}">Home</a></li>
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
                            <div class="image">
                                <img src="{{ url('/images/' . $campaign->image) }}" alt="" width="250px" style="padding: 10px">
                            </div>
                            <p><b>{{ $campaign->title }}</b></p>
                            <div class="time-left time-left-center">
                                <span>Time left:</span>
                                <h5 class="event-countdown" data-end-date="{{ $campaign->end_date }}" data-campaign-id="{{ $campaign->id }}"></h5>
                            </div>
                            <p>Raised money: ${{$campaign->raised_money}}</p>
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
                                {{ session()->forget('Donate_login') }}

                                <form action="{{ route('payment') }}" method="POST">
                                    @csrf
                                    @php
                                        $max_amount = $campaign->target_money -  $campaign->raised_money;
                                    @endphp
                                    <input type="hidden" value="{{$max_amount}}" id="maxAmout">
                                    <input type="hidden" value="{{$campaign->target_money}}" id="targetMoney">
                                    <input type="hidden" value="{{$campaign->raised_money}}" id="raisdMoney">
                                    <div class="tp-donations-amount">
                                        <h2>Your Donation (USD)</h2>
                                        <p>Max allowed donation: ${{$max_amount}}</p>
                                        <input type="number" class="form-control" name="amount" id="donation_option1" value="" checked>
                                        <label for="donation_option1" style="font-size: 30px"></label>
                                    </div>
                                    <div class="tp-donations-details">
                                        <h2>Details</h2>
                                        <div class="row">

                                            <input type="hidden" id="" name="UserId" value="{{ Auth::id() }}">
                                            <input type="hidden" id="" name="kit" value="{{ $campaign->title}}">
                                            <input type="hidden" id="" name="type" value="campaign">
                                            <input type="hidden" id="" name="campaign_id" value="{{$campaign->id}}">


                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="number" class="form-control" name="phone" id="phone"
                                                required placeholder="Phone">
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="adress" id="Adress"
                                                required placeholder="Adress">
                                            </div>
                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea required class="form-control" name="message" id="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" id="donateCampaign" class="theme-btn submit-btn">Donate Now</button>
                                    </div>
                            {{-- Start popup --}}
                                <div class="popup">
                                    <div class="inner">
                                        <button class="closeBtn"><i class="fa-solid fa-x"></i></button>
                                            <h2 class="text-center">You're donating more than what's needed to reach our goal!</h2>
                                            <h3 class="text-center">Would you like to support other campaigns as well and make an even bigger impact? </h3><br>
                                            <button class="theme-btn submit-btn" type="submit" id="popupMaxSubmit">Donate this campaign ${{$max_amount}}</button>
                                            <button class="theme-btn" id="popupMoreCampaign" type="button">Donate more campaigns</button>
                                    </div>
                                </div>
                            {{-- End popup --}}
                                </form>
                            {{-- start  popup Campaign --}}
                                <div class="popupCampaign">
                                    <div class="innerCampaign">
                                         <button class="closeBtn"><i class="fa-solid fa-x"></i></button>
                                        <form action="#">
                                            @csrf
                                            <h2 class="mt-0">More</h2>
                                            <div class="CampaignContainer row">
                                            <div class="CampaignCard  col-12">
                                                <img src="{{ url('/images/' . $campaign->image) }}" alt="" width="150px" height="150px" style="padding: 10px">
                                                <p><b>{{ $campaign->title }}</b></p>
                                                <div class="time-left time-left-center">
                                                    <span>Time left:</span>
                                                    <h5 class="event-countdown" data-end-date="{{ $campaign->end_date }}" data-campaign-id="{{ $campaign->id }}"></h5>
                                                 </div>
                                                 <sup>Max allowed donation: ${{$max_amount}}</sup>
                                                 <label for="Campaign{{$campaign->id}}">Donate: $</label>
                                                <input type="number" id="Campaign{{$campaign->id}}" name="Campaign{{$campaign->id}}" value="{{$max_amount}}" max="{{$max_amount}}" min="1">
                                            </div>
                                            @foreach ( $moreCampaigns as $moreCampaign )
                                            @php
                                                $max_amount = $moreCampaign->target_money -  $moreCampaign->raised_money;
                                            @endphp
                                            <div class="CampaignCard col-12">
                                                <img src="{{ url('/images/' . $moreCampaign->image) }}" alt="" width="150px" height="150px" style="padding: 10px">
                                                <p><b>{{ $campaign->title }}</b></p>
                                                <div class="time-left time-left-center">
                                                    <span>Time left:</span>
                                                    <h5 class="event-countdown" data-end-date="{{ $moreCampaign->end_date }}" data-campaign-id="{{ $moreCampaign->id }}"></h5>
                                                 </div>
                                                 <sup>Max allowed donation: ${{$max_amount}}</sup>
                                                 <label for="Campaign{{$moreCampaign->id}}">Donate: $</label>
                                                <input type="number" id="Campaign{{$moreCampaign->id}}" name="Campaign{{$moreCampaign->id}}" value="{{$max_amount}}" max="{{$max_amount}}" min="1">
                                            </div>
                                            @endforeach
                                            </div>
                                            <div class="submit-area">
                                                <button type="submit" id="donateCampaign" class="theme-btn submit-btn">Donate Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            {{-- end  popup Campaign --}}
                            @else
                                {{ session(['Donate_login' => $campaign]) }}
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

