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

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    {{--<link href="{{ asset('css/date-time-picker.css') }}" rel="stylesheet">--}}

</head>
<body>
<div class="preloader">
</div><!-- Preloader -->

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
<script src="{{ asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/venobox.min.js') }}"></script>
<script src="{{ asset('js/new-script.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/dropzone.js') }}"></script>
<script src="{{ asset('js/gmaps.js') }}"></script>
<script src="{{ asset('js/isotope.js') }}"></script>
<script src="{{ asset('js/map-script.js') }}"></script>
<script src="{{ asset('js/mixitup.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/popover.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/validate.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
{{--<script src="{{ asset('date-time-picker.js') }}"></script>--}}

</body>
</html>
