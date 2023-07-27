<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="La Defensoría Universitaria, es un órgano autónomo en el ejercicio de sus funciones e independiente de los órganos de gobierno de la Universidad.">
    <meta name="author" content="Defensoría Universitaria - UNAMBA">
    <meta name="keywords" content="Defensoría Universitaria, UNAMBA, Universidad Nacional Micaela Bastidas de Apurímac, Defensoría, Comunidad Universitaria, Apurímac, Micaela Bastidas de Apurímac">

    <link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/main.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/icon-du.png') }}" type="image/x-icon">

    {{-- Sweet Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <title>Defensoría Universitaria - UNAMBA</title>
</head>

<body @hasSection('body_attributes')@yield('body_attributes')@endif>
    <!-- ========== Preloader ========== -->
    <div class="preloader">
        <div class="preloader-wrapper">
            <img src="{{ asset('assets-front/css/ajax-loader.gif') }}" alt="ajax-loader">
        </div>
    </div>

    <!-- ========== Scrolltotop ========== -->
    <a href="#0" class="scrollToTop">
        <img src="{{ asset('assets-front/images/rocket.png') }}" alt="rocket">
    </a>


    <!-- ========== header-section ========== -->
    @include('frontend.layouts.header.header')
    
    <!-- ========== Content Page ========== -->
    @yield('content')
    
    <!-- ========== Footer ========== -->
    @include('frontend.layouts.footer.footer')


    <!-- ========== All Javascript========== -->
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

</html>
