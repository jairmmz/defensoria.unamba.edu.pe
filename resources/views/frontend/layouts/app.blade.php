<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Basic Page Needs
 ================================================== -->
    <meta charset="utf-8">
    <title>Defensoría Universitaria - UNAMBA</title>

    <!-- Mobile Specific Metas
 ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="La Defensoría Universitaria de la UNAMBA, es un órgano autónomo en el ejercicio de sus funciones e independiente de los órganos de gobierno de la Universidad.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Defensoría Universitaria - UNAMBA">
    <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="educenter">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/themify-icons/themify-icons.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate/animate.css') }}">
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/venobox/venobox.css') }}">

    <!-- Main Stylesheet -->
    <link href="{{ asset('assets/css/front/style.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/icon-du.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/icon-du.png') }}" type="image/x-icon">
</head>

<body>
    <!-- preloader start -->
    <div class="preloader">
        <img src="{{ asset('assets/images/preloader.gif') }}" alt="preloader">
    </div>
    
    <!-- header-->
    @include('frontend.layouts.header.header')
    
    <!-- Content -->
    @yield('content')

    <!-- footer -->
    @include('frontend.layouts.footer.footer')



    <!-- -- Plugins -- -->
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
    <!-- aos -->
    <script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>
    <!-- venobox popup -->
    <script src="{{ asset('assets/plugins/venobox/venobox.min.js') }}"></script>
    <!-- filter -->
    <script src="{{ asset('assets/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ asset('assets/js/front/script.js') }}"></script>

</body>

</html>
