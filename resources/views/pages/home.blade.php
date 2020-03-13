@extends('layouts.app')


@section('content')
    <!-- Main slider -->
    <section class="main-slider">
        <div class="container-fluid">
            <ul class="main-slider-carousel owl-carousel owl-theme slide-nav">
                <li class="slider-wrapper">
                    <div class="image"><img src="{{asset('images/main-slider/image-1.jpg')}}" alt=""></div>
                    <div class="slider-caption light text-center">
                        <div class="container">
                            <h3>change the life, change the world <span class="border-shape"></span></h3>
                            <h1>sponsor an orphan and <br>feed the poor people</h1>
                            <div class="text light large-text">With Warmth & True Support</div>
                            <div class="link-btn"><a href="javascript:void(0)" class="theme-btn btn-style-two">Learn More</a></div>
                        </div>
                    </div>
                    <div class="slide-overlay"></div>
                </li>
                <li class="slider-wrapper">
                    <div class="image"><img src="{{asset('images/main-slider/image-1.jpg')}}" alt=""></div>
                    <div class="slider-caption light text-center">
                        <div class="container">
                            <h3>change the life, change the world <span class="border-shape"></span></h3>
                            <h1>sponsor an orphan and <br>feed the poor people</h1>
                            <div class="text light large-text">With Warmth & True Support</div>
                            <div class="link-btn"><a href="javascript:void(0)" class="theme-btn btn-style-two">Learn More</a></div>
                        </div>
                    </div>
                    <div class="slide-overlay"></div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome-section sp-two">
        <div class="container">
            <div class="row">
                <!-- services block -->
                <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-heart-box"></span></div>
                        <h4><a href="javascript:void(0)">Get Inspired</a></h4>
                        <div class="text"> Become a partner with a one time gift or donation or a monthly partner.
                        </div>
                        <div class="read-more">
                            <a href="javascript:void(0)"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- services block -->
                <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-button"></span></div>
                        <h4><a href="javascript:void(0)">Give Donation</a></h4>
                        <div class="text">Donate to help us sreach the world with the gospel of Jesus Christ and meet their needs.</div>
                        <div class="read-more">
                            <a href="javascript:void(0)"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- services block -->
                <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-boy"></span></div>
                        <h4><a href="javascript:void(0)">Become a Volunteer</a></h4>
                        <div class="text">Join in helping us reach the lost with the gospel of Jesus Christ through Charity. </div>
                        <div class="read-more">
                            <a href="javascript:void(0)"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- services block -->
                <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-donation"></span></div>
                        <h4><a href="javascript:void(0)">Help The Children</a></h4>
                        <div class="text">Give to help us meet the needs of children in their education and development</div>
                        <div class="read-more">
                            <a href="javascript:void(0)"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 image-block-one">
                    <div class="image big-image"><img src="{{asset('images/resource/about.jpg')}}" alt=""></div>
                    <div class="image small-image"><img src="{{asset('images/resource/about-small.jpg')}}" alt=""></div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="pl-lg-5">
                        <!-- sec-title -->
                        <div class="sec-title style-two">
                            <h4>A Charity with Mission</h4>
                            <h1>We are <span>Bernard Ekow Aggrey Initiatives</span></h1>
                        </div>
                        <!-- about block -->
                        <div class="about-block">
                            <div class="inner-box">
                                <div class="text">
                                    <p>We reach out to the poor and needy with the Word Of God and support them Financially. We win Souls for God through social outreach programs.</p>
                                    <p>Your donations and supports will help us achieve our noble Goal.</p>
                                </div>
                                <div class="author">
                                    <div class="inner-box">
                                        <h5>Bernard Ekow Aggrey</h5>
                                    </div>

                                    <div class="sign"><img src="{{asset('images/resource/sign.png')}}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

   

    <!-- Mission Section -->
    <section class="mission-section sp-one" style="background-image: url({{asset('images/background/2.jpg')}})">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="icon-box"><img src="{{asset('images/icons/sec-title.png')}}" alt=""></div>
                <h1>Mission & <span>Goals</span></h1>
                <div class="text">Many children and poor people are at high risk of severe malnutrition</div>
            </div>
            <div class="row">
                <div class="col-xl-9">
                    <div class="row clearfix">
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-love-and-romance"></span></div>
                                            <h4>Homeless Children</h4>
                                        </div>

                                    </div>

                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">Reaching out to street children and young people in need of shelter.</div>
                                                <h4>Homeless Children</h4>
                                                <div class="icon-box"><span class="flaticon-love-and-romance"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-doctor"></span></div>
                                            <h4>Medical Facilities</h4>
                                        </div>

                                    </div>

                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">An outreach to help in providing medical care to those who desperately need it. </div>
                                                <h4>Medical Facilities</h4>
                                                <div class="icon-box"><span class="flaticon-doctor"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-cancer"></span></div>
                                            <h4>Education For All</h4>
                                        </div>
                                    </div>

                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">Providing a safe environment for vulnerable children by integrating them into society through education.
                                                </div>
                                                <h4>Education For All</h4>
                                                <div class="icon-box"><span class="flaticon-cancer"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-support"></span></div>
                                            <h4>Love Your World</h4>
                                        </div>

                                    </div>

                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">Nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute lorem ipsum.</div>
                                                <h4>Love Your World</h4>
                                                <div class="icon-box"><span class="flaticon-support"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-blood"></span></div>
                                            <h4>Save Water And Food</h4>
                                        </div>

                                    </div>

                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">A donation to provide communities with the gift of water and nutritious food .</div>
                                                <h4>Save Water And Food</h4>
                                                <div class="icon-box"><span class="flaticon-love-and-romance"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-monitor"></span></div>
                                            <h4>Crowdfunding</h4>
                                        </div>

                                    </div>

                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">Small and big, your contribution is valued. Become a sponsor and partner in sharing the gospel of Jesus Christ by helping us improve the lives of people in community based projects.</div>
                                                <h4>Crowdfunding</h4>
                                                <div class="icon-box"><span class="flaticon-monitor"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Event section -->
    <section class="event-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 image-block-one">
                    <div class="image big-image"><img src="{{asset('images/resource/upcomming-event.jpg')}}" alt=""></div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="sp-three">
                        <!-- sec-title -->
                        <div class="sec-title style-two">
                            <h4>A Charity with Mission</h4>
                            @if(count($onGoingEvents) > 0)
                                <h1>Ongoing <span>Events</span></h1>
                            @elseif(count($upComingEvents) > 0)
                                <h1>Upcoming <span>Events</span></h1>
                            @else
                                <h1>Past <span>Events</span></h1>
                            @endif
                            <div class="text">Bernard Ekow Aggrey Initiatives is embacking on number of events geared towards the improvement of the lives of the needy through the Word Of God and Financial support.</div>
                        </div>

                        <div class="row">
                            <!-- Event block -->
                            @if(count($onGoingEvents) > 0)
                               @foreach($onGoingEvents as $onGoingEvent)
                                   @php
                                    $startDate = $onGoingEvent->start_date;
                                    $startDate = strtotime($startDate);
                                    $startDay = date('d',$startDate);
                                    $StartMonth = date('M',$startDate);
                                    $StartYear = date('Y',$startDate);
                                    $startTime = date('g:ia',$startDate);

                                    $endDate = $onGoingEvent->end_date;
                                    $endDate = strtotime($endDate);
                                    $endDay = date('d',$endDate);
                                    $endMonth = date('M',$endDate);
                                    $endYear = date('Y',$endDate);
                                    $endTime = date('g:ia',$endDate);
                                    @endphp
                                    <div class="col-md-6 event-block">
                                        <div class="inner-box">
                                            <div class="date">{{$startDay}} <span style="font-size: small">{{$StartMonth}} </span><span style="font-size: small">{{$StartYear}}&nbsp;&nbsp; to &nbsp;&nbsp; </span> {{$endDay}} <span style="font-size: small">{{$endMonth}} </span><span style="font-size: small">{{$StartYear}}</span></div>
                                            <div class="organizer">Organized By: <a href="javascript:void(0)">{{$onGoingEvent->organiser}}</a></div>
                                            <h4>{{$onGoingEvent->description}}</h4>
                                            <ul class="post-meta">
                                                <li><span class="fa fa-clock"></span>{{$startTime}} to {{$endTime}}</li>
                                                <li><span class="fa fa-map-marker-alt"></span>{{$onGoingEvent->location}}</li>
                                            </ul>
                                        </div>

                                    </div>
                               @endforeach
                                   <div class="link-btn"><a href="{{url('/events')}}" class="theme-btn btn-style-fourteen">Events Calender</a></div>
                            @elseif(count($upComingEvents) > 0)
                                @foreach($upComingEvents as $upComingEvent)
                                    @php
                                        $startDate = $upComingEvent->start_date;
                                        $startDate = strtotime($startDate);
                                        $startDay = date('d',$startDate);
                                        $StartMonth = date('M',$startDate);
                                        $StartYear = date('Y',$startDate);
                                        $startTime = date('g:ia',$startDate);

                                        $endDate = $upComingEvent->end_date;
                                        $endDate = strtotime($endDate);
                                        $endDay = date('d',$endDate);
                                        $endMonth = date('M',$endDate);
                                        $endYear = date('Y',$endDate);
                                        $endTime = date('g:ia',$endDate);
                                    @endphp
                                    <div class="col-md-6 event-block">
                                        <div class="inner-box">
                                            <div class="date">{{$startDay}} <span style="font-size: small">{{$StartMonth}} </span><span style="font-size: small">{{$StartYear}}&nbsp;&nbsp; to &nbsp;&nbsp; </span> {{$endDay}} <span style="font-size: small">{{$endMonth}} </span><span style="font-size: small">{{$StartYear}}</span></div>
                                            <div class="organizer">Organized By: <a href="javascript:void(0)">{{$upComingEvent->organiser}}</a></div>
                                            <h4>{{$upComingEvent->description}}</h4>
                                            <ul class="post-meta">
                                                <li><span class="fa fa-clock"></span>{{$startTime}} to {{$endTime}}</li>
                                                <li><span class="fa fa-map-marker-alt"></span>{{$upComingEvent->location}}</li>
                                            </ul>
                                        </div>

                                    </div>
                                @endforeach
                                    <div class="link-btn"><a href="{{url('/events')}}" class="theme-btn btn-style-fourteen">Events Calender</a></div>
                            @else
                                @foreach($pastEvents as $pastEvent)
                                    @php
                                        $startDate = $pastEvent->start_date;
                                        $startDate = strtotime($startDate);
                                        $startDay = date('d',$startDate);
                                        $StartMonth = date('M',$startDate);
                                        $StartYear = date('Y',$startDate);
                                        $startTime = date('g:ia',$startDate);

                                        $endDate = $pastEvent->end_date;
                                        $endDate = strtotime($endDate);
                                        $endDay = date('d',$endDate);
                                        $endMonth = date('M',$endDate);
                                        $endYear = date('Y',$endDate);
                                        $endTime = date('g:ia',$endDate);
                                    @endphp
                                    <div class="col-md-6 event-block">
                                        <div class="inner-box">
                                            <div class="date">{{$startDay}} <span style="font-size: small">{{$StartMonth}} </span><span style="font-size: small">{{$StartYear}}&nbsp;&nbsp; to &nbsp;&nbsp; </span> {{$endDay}} <span style="font-size: small">{{$endMonth}} </span><span style="font-size: small">{{$StartYear}}</span></div>
                                            <div class="organizer">Organized By: <a href="javascript:void(0)">{{$pastEvent->organiser}}</a></div>
                                            <h4>{{$pastEvent->description}}</h4>
                                            <ul class="post-meta">
                                                <li><span class="fa fa-clock"></span>{{$startTime}} to {{$endTime}}</li>
                                                <li><span class="fa fa-map-marker-alt"></span>{{$pastEvent->location}}</li>
                                            </ul>
                                        </div>

                                    </div>
                                @endforeach
                                <div class="link-btn"><a href="{{url('/events')}}" class="theme-btn btn-style-fourteen">Events Calender</a></div>
                            @endif
                            <!-- Event block -->
                            {{--<div class="col-md-6 event-block">--}}
                                {{--<div class="inner-box">--}}
                                    {{--<div class="date">31 <span>August</span></div>--}}
                                    {{--<div class="organizer">Organized By: <a href="javascript:void(0)">Bernard Ekow Aggrey Initiatives</a></div>--}}
                                    {{--<h4>Sports Event for funding charity for innocent people</h4>--}}
                                    {{--<ul class="post-meta">--}}
                                        {{--<li><span class="fa fa-clock"></span>Starts 5.00 PM</li>--}}
                                        {{--<li><span class="fa fa-map-marker-alt"></span>121 Kings St. NY 26038</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="our-team sp-one">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="icon-box"><img src="{{asset('images/icons/sec-title.png')}}" alt=""></div>
                <h1>Volunteers <span>Team</span></h1>
                <div class="text">Orphan children are at high risk of severe malnutrition & no education </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-1.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Scott William</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-2.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Liam Irvines</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-3.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Diana Leslie</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-4.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Tania Vandy</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-1.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Scott William</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{'images/resource/team-2.jpg'}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Liam Irvines</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-3.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Diana Leslie</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-4.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Tania Vandy</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-1.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Scott William</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-2.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Liam Irvines</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-3.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Diana Leslie</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-4.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="javascript:void(0)"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Tania Vandy</a></h4>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </section>

    <!-- Parallax section -->
    <section class="parallax-section" style="background-image: url({{asset('images/background/3.jpg')}})">
        <div class="container">
            <h1>We help thousands of children, <br>arrange food & build houses for them</h1>
            <h3>Join us & Become a Volunteer <span class="border-shape"></span></h3>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section sp-one">
        <div class="container">

            <div class="single-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-none">

                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/author.jpg')}}" alt="">
                        </div>
                        <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy. </div>
                        <h3>Sande Well  <span>Bernard Ekow Aggrey Initiatives Donator</span></h3>
                    </div>
                </div>

                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/author.jpg')}}" alt="">
                        </div>
                        <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy. </div>
                        <h3>Sande Well  <span>Bernard Ekow Aggrey Initiatives Donator</span></h3>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--End Testimonial Section-->

    <!-- News Section -->
    <section class="news-section sp-two">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="icon-box"><img src="{{asset('images/icons/sec-title.png')}}" alt=""></div>
                <h1>What’s <span>Happening</span></h1>
                <div class="text">Poor people are at high risk of severe malnutrition & no education</div>
            </div>
            <div class="row clearfix">
                <!--News Block-->
                <div class="news-block-one col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/news-1.jpg')}}" alt="">
                            <div class="overlay">
                                <a class="link-btn" href="blog-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="date">31 <span>JULY</span></div>
                            <div class="post-meta">By: <span> Bernard Ekow Aggrey Initiative</span></div>
                            <h4><a href="blog-details.html">Feeding the poor people</a></h4>
                            <div class="text">Auisy nostrud exercitation ullamc laboris aliquip ex bea sed consequat duis autese dolore magna aliqua nim. </div>
                            <div class="read-more-btn">
                                <a href="blog-details.html" class="read-more">Read More </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block-one col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/news-2.jpg')}}" alt="">
                            <div class="overlay">
                                <a class="link-btn" href="blog-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="date">25 <span>AUG</span></div>
                            <div class="post-meta">By: <span> Bernard Ekow Aggrey Initiative</span></div>
                            <h4><a href="blog-details.html">Take care of children</a></h4>
                            <div class="text">Auisy nostrud exercitation ullamc laboris aliquip ex bea sed consequat duis autese dolore magna aliqua nim. </div>
                            <div class="read-more-btn">
                                <a href="blog-details.html" class="read-more">Read More </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block-one col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/news-3.jpg')}}" alt="">
                            <div class="overlay">
                                <a class="link-btn" href="blog-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="date">18 <span>SEP</span></div>
                            <div class="post-meta">By: <span> Bernard Ekow Aggrey Initiative</span></div>
                            <h4><a href="blog-details.html">Take care of children</a></h4>
                            <div class="text">Auisy nostrud exercitation ullamc laboris aliquip ex bea sed consequat duis autese dolore magna aliqua nim. </div>
                            <div class="read-more-btn">
                                <a href="blog-details.html" class="read-more">Read More </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end -->

            </div>
        </div>
    </section>

    <!-- Call To Action -->
    <section class="subscribe-section" style="background-image: url({{asset('images/background/4.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="title-column col-lg-8">
                    <h2>Subscribe to Newsletter</h2>
                    <div class="text">Sed do eiusmod tempor incididunt ut laboret dolore magna aliqua enim nostrud</div>
                </div>
                <div class="subscribe-form col-lg-4">
                    <form method="post" action="http://html.tonatheme.com/2018/Bernard Ekow Aggrey Initiative/contact.html">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Your email..." required="">
                            <button type="submit" class="theme-btn"><span class="fa fa-paper-plane"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection