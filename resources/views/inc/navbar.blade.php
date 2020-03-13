

<!-- main header -->
<header class="main-header">

    <!-- header top -->
    <div class="header-top">
        <div class="container">
            <div class="outer-box">
                <!--Top Left-->
                <div class="top-left">
                    <ul class="links-nav clearfix">
                        <li><i class="fa fa-phone" style="color: blue"></i>Call Us Now <strong>+233 24 070 9897</strong></li>
                        <li><i class="fa fa-envelope-open" style="color: blue"></i>Send Us Email <strong>baggrey0249@gmail.com</strong></li>
                    </ul>
                </div>

                <!--Top Right-->
                <div class="top-right">
                    <div class="link-btn"><a href="#" class="theme-btn login-btn"><span class="fa fa-sign-in-alt" style="color: blue"></span>Donor Login</a></div>
                    <div class="social-links clearfix">
                        <a href="#"><span class="fab fa-twitter" style="color: blue"></span></a>
                        <a href="#"><span class="fab fa-facebook" style="color: blue"></span></a>
                        <a href="#"><span class="fab fa-google-plus" style="color: blue"></span></a>
                        <a href="#"><span class="fab fa-youtube" style="color: blue"></span></a>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container clearfix">

            <div class="float-left logo-outer">
                <div class="logo"><a href="{{url('/')}}"><img src="{{asset('images/logo/logo.png')}}" alt="" title=""></a></div>
            </div>

            <div class="float-right upper-right clearfix">

                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="color: blue">
                                <span class="icon-bar" style="color: blue"></span>
                                <span class="icon-bar" style="color: blue"></span>
                                <span class="icon-bar" style="color: blue"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About Us</a></li>
                                <li><a href="{{url('/events')}}">Events</a></li>
                                <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->

                    <!-- Search box -->
                    <div class="outer-box">
                        <!--Search outer-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="link-btn"><a href="#" class="theme-btn btn-style-two donate-box-btn">Donate Now</a></div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="{{url('/')}}" class="img-responsive"><img src="{{asset('images/logo/logo.png')}}" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About Us</a></li>
                                <li><a href="{{url('/events')}}">Events</a></li>
                                <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>


        </div>
    </div>
    <!--End Sticky Header-->
</header>