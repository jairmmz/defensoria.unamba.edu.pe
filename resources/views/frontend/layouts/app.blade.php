<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/main.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets-front/images/favicon.png') }}" type="image/x-icon">

    <title>Messon - Bulk SMS Reseller Business HTML Template</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-wrapper">
            <img src="{{ asset('assets-front/css/ajax-loader.gif') }}" alt="ajax-loader">
        </div>
    </div>
    <!-- ==========Preloader========== -->

    <!-- ==========scrolltotop========== -->
    <a href="#0" class="scrollToTop">
        <img src="{{ asset('assets-front/images/rocket.png') }}" alt="rocket">
    </a>
    <!-- ==========scrolltotop========== -->

    @include('frontend.layouts.header.header')

    @yield('content')

    @include('frontend.layouts.footer.footer')

    



    <script src="{{ asset('assets-front/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/plugins.js') }}"></script>
    <script src="{{ asset('assets-front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/waypoint.js') }}"></script>    
    <script src="{{ asset('assets-front/js/isotope.pkgd.min.js') }}"></script>    
    <script src="{{ asset('assets-front/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets-front/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/countdown.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets-front/js/main.js') }}"></script>
</body>


<!-- index.html   03:21:08 GMT -->
</html>