@extends('frontend.layouts.app')
@section('content')
    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="{{ asset('assets-front/images/page-header.jpg') }}">
        <div class="container">
            <h1 class="title m-0">Servicios</h1>
        </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{ route('index') }}">Inicio</a>
                </li>
                <li>
                    Servicios
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->


    <!--=================Our Feature================= -->
    <section class="feature-section padding-top padding-bottom mb-4">
        <div class="container mb-4">
            <div class="section-header">
                <h2 class="title">Funciones de la Defensoría Universitaria</h2>
            </div>
            <div class="feature-section-wrapper">
                <div class="feature-area">
                    <div class="feature-item">
                        <div class="icon">
                            <i class="flaticon-customer-service"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Velar por los derechos</h5>
                            <p>Protege los derechos de docentes, estudiantes y personal administrativo frente a acciones de las autoridades que los vulneren.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="flaticon-customer-service"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Atender denuncias </h5>
                            <p>Recibe y aborda denuncias relacionadas con la infracción de derechos individuales dentro de la comunidad universitaria.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="flaticon-newspaper"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Mejorar la defensa de los derechos</h5>
                            <p>Propone normas y políticas para fortalecer la protección de los derechos en los servicios universitarios.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-area">
                    <img src="{{ asset('assets-front/images/feature/feature01.png') }}" alt="feature">
                </div>
                <div class="feature-area">
                    <div class="feature-item">
                        <div class="icon">
                            <i class="flaticon-money"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Confidencialidad y reserva</h5>
                            <p>Garantiza la confidencialidad y, cuando necesario, informa a las autoridades competentes manteniendo la reserva.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="flaticon-money"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Orientación sobre procedimientos</h5>
                            <p>Brinda orientación para canalizar quejas, denuncias o reclamaciones a las instancias adecuadas.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="flaticon-newspaper-1"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Pronunciamientos no vinculantes</h5>
                            <p>Emite recomendaciones y propuestas, pero no puede modificar acuerdos de los órganos de gobierno.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================Our Feature================= -->
@endsection
