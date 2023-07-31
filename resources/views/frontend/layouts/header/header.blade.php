<!-- ==========Header Section========== -->
<header>
    <div class="header-top d-none d-md-block bg-theme">
        <div class="container">
            <div class="header-top-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li class="mr-3">
                                <a href="Tel:{{$setting->number_phone}}"><i class="fas fa-phone-square"></i><b>+51 {{ $setting->number_phone }}</b></a>
                            </li>
                            <li>
                                <a href="mailto:defensoriauniversitaria@unamba.edu.pe"><i
                                        class="fas fa-envelope"></i><b>defensoriauniversitaria@unamba.edu.pe</b></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-flex flex-wrap align-items-center justify-content-end">
                        <ul>
                            <li>
                                <a href="#0">
                                    <b>
                                        Horario: Lunes a Viernes de 07:30-13:00 y 14:00-15:30
                                    </b>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-area">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        @if (!$setting->logo_website)
                            <img src="{{ asset('assets/images/logo-du-unamba.png') }}" alt="logo-defensoría-unamba">
                        @else
                            <img src="{{ asset('assets/images/' . $setting->logo_website) }}"
                                alt="logo-defensoría-unamba">
                        @endif
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.index.news') }}">Noticias</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.services') }}">Funciones</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.procedures') }}">Procedimientos</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.documents') }}">Documentos</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.attention-form') }}">Módulo de atención</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section========== -->
