@extends('layouts.app')


@section('content')
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
        <div class="container">
            <h1>About Us</h1>
        </div>
    </section>

    <div class="bread-crumb">
        <div class="container">
            <ul class="clearfix">
                <li><a href="index-2.html"><span class="fa fa-home"></span>Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>

    <!-- About Us -->
    <section class="about-us-two sp-four">
        <div class="container">
            <!-- about block -->
            <div class="about-block-two">
                <div class="inner-box">
                    <h4>A Charity with Believe in Help <span></span></h4>
                    <h1>Impact of <span class="theme-color">Bernard Ekow Aggey Initiatives</span></h1>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboret dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                    <div class="author">
                        <div class="inner-box">
                            <div class="image"><img src="images/resource/author-2.jpg" alt=""></div>
                            <h5>Bernard Ekow Aggrey</h5>
                            <div class="sign"><img src="images/resource/sign.png" alt=""></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fact Counter -->
    {{--<div class="fact-counter sp-two style-two">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}

                {{--<!--Column-->--}}
                {{--<article class="column counter-column col-xl-3 col-lg-6 col-md-6 wow fadeIn" data-wow-duration="900ms">--}}
                    {{--<div class="item">--}}
                        {{--<div class="inner-box">--}}
                            {{--<div class="icon-box"><span class="flaticon-donation-1"></span></div>--}}
                            {{--<div class="count-outer">--}}
                                {{--<span class="count-text" data-speed="3000" data-stop="98520">0</span>--}}
                                {{--<p>Received Donations</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}

                {{--<!--Column-->--}}
                {{--<article class="column counter-column col-xl-3 col-lg-6 col-md-6 wow fadeIn" data-wow-duration="300ms">--}}
                    {{--<div class="item">--}}
                        {{--<div class="inner-box">--}}
                            {{--<div class="icon-box"><span class="flaticon-balloon"></span></div>--}}
                            {{--<div class="count-outer">--}}
                                {{--<span class="count-text" data-speed="3000" data-stop="30682">0</span>--}}
                                {{--<p>Received Donations</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}

                {{--<!--Column-->--}}
                {{--<article class="column counter-column col-xl-3 col-lg-6 col-md-6 wow fadeIn" data-wow-duration="600ms">--}}
                    {{--<div class="item">--}}
                        {{--<div class="inner-box">--}}
                            {{--<div class="icon-box"><span class="flaticon-shirt"></span></div>--}}
                            {{--<div class="count-outer">--}}
                                {{--<span class="count-text" data-speed="3000" data-stop="6184">0</span>--}}
                                {{--<p>Our Volunteers</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}


                {{--<!--Column-->--}}
                {{--<article class="column counter-column col-xl-3 col-lg-6 col-md-6 wow fadeIn" data-wow-duration="900ms">--}}
                    {{--<div class="item">--}}
                        {{--<div class="inner-box">--}}
                            {{--<div class="icon-box"><span class="flaticon-ecology"></span></div>--}}
                            {{--<div class="count-outer">--}}
                                {{--<span class="count-text" data-speed="3000" data-stop="14369">0</span>--}}
                                {{--<p>Projects Done</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- Disaster response -->
    <section class="disaster-response sp-two" style="background-image: url({{asset('images/background/3.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image mb-30"><img src="images/resource/feature-4.jpg" alt=""></div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="text-block-one">
                        <h4>Fundrising for Goodness</h4>
                        <h1>Quick Disaster Response</h1>
                        <div class="text">Sed do eiusmod tempor incididunt ut laboret dolore magna aliqua enim nost dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla aliquip consequat duis aute irure dolor in reprehenderit. </div>
                        <div class="link-btn"><a href="#" class="theme-btn btn-style-twelve">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome-section sp-two">
        <div class="container">
            <div class="row">
                <!-- services block -->
                <div class="services-block-one col-lg-4 col-md-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-heart-box"></span></div>
                        <h4><a href="#">Get Inspired & Give</a></h4>
                        <div class="text">Puis nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute.</div>
                        <div class="read-more">
                            <a href="#"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- services block -->
                <div class="services-block-one col-lg-4 col-md-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-button"></span></div>
                        <h4><a href="#">Easier Donations</a></h4>
                        <div class="text">Auis nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute. </div>
                        <div class="read-more">
                            <a href="#"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- services block -->
                <div class="services-block-one col-lg-4 col-md-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-donation"></span></div>
                        <h4><a href="#">Help the Needed</a></h4>
                        <div class="text">Cuis nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute.</div>
                        <div class="read-more">
                            <a href="#"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="our-team sp-five">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="icon-box"><img src="images/icons/sec-title.png" alt=""></div>
                <h1>Volunteers <span>Team</span></h1>
                <div class="text">Orphan children are at high risk of severe malnutrition & no education </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-2.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-3.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-4.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-1.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-2.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-3.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-4.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-1.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-2.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-3.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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
                            <img src="images/resource/team-4.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
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

    <!-- Testimonial Section -->
    <section class="testimonial-section sp-one">
        <div class="container">

            <div class="single-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-none">

                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author.jpg" alt="">
                        </div>
                        <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy. </div>
                        <h3>Sande Well  <span>ChariteMax Donator</span></h3>
                    </div>
                </div>

                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author.jpg" alt="">
                        </div>
                        <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy. </div>
                        <h3>Sande Well  <span>ChariteMax Donator</span></h3>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--End Testimonial Section-->

    <!-- Feature section -->
    <section class="feature-section">
        <div class="container-fluid">
            <div class="row m-0">
                <div class="feature-block col-xl-4 col-lg-6">
                    <div class="inner-box">
                        <div class="image"><img src="images/resource/feature-1.jpg" alt=""></div>
                        <div class="overlay-content">
                            <h5>Food & Water</h5>
                            <h4>Benefitting over 800,000 children every year through welfare projects </h4>
                        </div>
                    </div>
                </div>
                <div class="feature-block col-xl-4 col-lg-6">
                    <div class="inner-box">
                        <div class="image"><img src="images/resource/feature-2.jpg" alt=""></div>
                        <div class="overlay-content">
                            <h5>Get Quick Donations</h5>
                            <h4>Deploy best possible methodology and technology for achieving ideal</h4>
                        </div>
                    </div>
                </div>
                <div class="feature-block col-xl-4 col-lg-6">
                    <div class="inner-box">
                        <div class="image"><img src="{{asset('images/resource/feature-3.jpg')}}" alt=""></div>
                        <div class="overlay-content">
                            <h5>Real Approach</h5>
                            <h4>We help donors make safe and easy donations to local organizations</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax section -->
    <section class="parallax-section style-two" style="background-image: url({{asset('images/background/3.jpg')}})">
        <div class="container">
            <h1>We help thousands of children, <br>arrange food & build houses for them</h1>
            <h3>Join us & Become a Volunteer <span class="border-shape"></span></h3>
        </div>
    </section>
@endsection