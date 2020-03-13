<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <meta name="description" content="">
    <meta name="author" content="WowThemez">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('APP_NAME', 'BEA Initiative') }}</title>


    <link rel="icon" type="icon/png" href="{{asset('images/icons/title_icon.png')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Font Awesome Icons CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome-all.css')}}">
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{{asset('css/gallery/elegant-font-icons.css')}}">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{{asset('css/gallery/elegant-line-icons.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{asset('css/gallery/venobox.css')}}">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/gallery/owl.carousel.css')}}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{asset('css/gallery/slicknav.min.css')}}">
    <!-- Css Animation CSS -->
    <link rel="stylesheet" href="{{asset('css/gallery/css-animation.min.css')}}">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/gallery/nivo-slider.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('css/gallery/main.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="{{asset('js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    {{--<link href="{{ asset('css/date-time-picker.css') }}" rel="stylesheet">--}}

</head>
<body>
{{--<div class="preloader">--}}
{{--</div><!-- Preloader -->--}}

{{--<div class="site-preloader-wrap">--}}
    {{--<div class="spinner">--}}
        {{--<img src="{{asset('images/logo2.png')}}" style="width: 150px">--}}

    {{--</div>--}}

</div><!-- Preloader -->
<div class="container-fluid">
    @include('inc.navbar')
    @include('inc.messages')


        @yield('content')

    @include('inc.footer')
</div>

<!-- Scripts -->

<!-- jQuery Lib -->
<script src="{{asset('js/gallery/jquery-1.12.4.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/gallery/bootstrap.min.js')}}"></script>
<!-- Tether JS -->
<script src="{{asset('js/gallery/tether.min.js')}}"></script>
<!-- Imagesloaded JS -->
<script src="{{asset('js/gallery/imagesloaded.pkgd.min.js')}}"></script>
<!-- OWL-Carousel JS -->
<script src="{{asset('js/gallery/owl.carousel.min.js')}}"></script>
<!-- isotope JS -->
<script src="{{asset('js/gallery/jquery.isotope.v3.0.2.js')}}"></script>
<!-- Smooth Scroll JS -->
<script src="{{asset('js/gallery/smooth-scroll.min.js')}}"></script>
<!-- venobox JS -->
<script src="{{asset('js/gallery/venobox.min.js')}}"></script>
<!-- ajaxchimp JS -->
<script src="{{asset('js/gallery/jquery.ajaxchimp.min.js')}}"></script>
<!-- Counterup JS -->
<script src="{{asset('js/gallery/jquery.counterup.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('js/gallery/jquery.waypoints.v2.0.3.min.js')}}"></script>
<!-- Slick Nav JS -->
<script src="{{asset('js/gallery/jquery.slicknav.min.js')}}"></script>
<!-- Nivo Slider JS -->
<script src="{{asset('js/gallery/jquery.nivo.slider.pack.js')}}"></script>
<!-- Letter Animation JS -->
<script src="{{asset('js/gallery/letteranimation.min.js')}}"></script>
<!-- Wow JS -->
<script src="{{asset('js/gallery/wow.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('js/gallery/contact.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/gallery/main.js')}}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
{{--<script src="{{ asset('date-time-picker.js') }}"></script>--}}

</body>
</html>
