@extends('frontend.layouts.app')
@section('content')
<!-- =============Banner Section============= -->
<section class="banner-section">
    <div class="container">
        <div class="banner-content  wow fadeInUp" data-wow-delay=".3s">
            <b class="category">
                Velamos por los derechos de la Comunidad Universitaria
            </b>
            <h1 class="title">Defensoría Universitaria UNAMBA</h1>
            <div class="video-button-group">
                <a href="mailto:defensoriauniversitaria@unamba.edu.pe" class="custom-button active">Contacto</a>
            </div>
            <div class="round-shape">
            </div>
        </div>
    </div>
    <div class="maps-shape bg_img bg-contain" data-background="{{ asset('assets-front/images/banner/banner-bg01.png') }}"></div>
    <div class="shape-thumb">
        {{-- <img class="wow slideInUp" data-wow-delay=".7s" src="{{ asset('assets-front/images/banner/banner-shape01.png') }}" alt="banner"> --}}
        <img class="wow slideInUp" data-wow-delay=".7s" src="{{ asset('assets-front/images/micaela-bastidas-wh.png') }}" alt="banner">
    </div>
</section>
<!-- =============Banner Section============= -->

<!--=================Bulk Sms================= -->
<section class="bulk-sms padding-top">
    <div class="container">
        <div class="row flex-wrap-reverse align-items-center">
            <div class="col-lg-6">
                <div class="bulk-content text-center text-sm-left wow fadeIn" data-wow-delay=".3s">
                    <h3 class="title">¿QUÉ ES LA DEFENSORÍA UNIVERSITARIA?</h3>
                    <p>La Defensoría Universitaria de la UNAMBA, es un órgano autónomo en el ejercicio de sus funciones e independiente de los órganos de gobierno de la Universidad.</p>
                    <p>Es la instancia encargada de la tutela de los derechos de los miembros de la comunidad universitaria y vela por el mantenimiento del principio de autoridad responsable. La defensoría atiende denuncias por infracción a derechos individuales y pueden acudir a ella los estudiantes, docentes, egresados y personal administrativo. El estatuto de la universidad establece los mecanismos de regulación y funcionamiento de la Defensoría. (Art. 133 de la Ley Universitaria N° 30220).</p>
                    <a href="https://www.sunedu.gob.pe/sunedu-defensoria-universitaria-instancia-fundamental-para-democracia-gobernanza-calidad-educativa/" class="custom-button active" target="_blank">Leer más</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bulk-thumb wow slideInRight">
                    <img src="{{ asset('assets/images/about/Qué-es-la-defensoría.universitaria.png') }}" alt="bulk">
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================Bulk Sms================= -->

<!--=================Chooose Us================= -->
<section class="choose-us-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <h2 class="title">Principios</h2>
        </div>
        <div class="row mb-30-none justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="choose-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="choose-thumb">
                        <i class="flaticon-global"></i>
                    </div>
                    <div class="choose-content">
                        <h5 class="title">Independencia</h5>
                        <p>La Defensoría Universitaria es independiente, asegurando imparcialidad y autonomía en la resolución de conflictos y protección de derechos. Como ente autónomo, toma decisiones sin influencias externas, beneficiando a la comunidad universitaria con transparencia y respeto a los derechos fundamentales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="choose-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="choose-thumb">
                        <i class="flaticon-ui"></i>
                    </div>
                    <div class="choose-content">
                        <h5 class="title">Respeto</h5>
                        <p>La institución actuará asegurando el respeto a la integridad de todas las personas en la comunidad universitaria, evitando cualquier tipo de maltrato y garantizando el pleno respeto de sus derechos y libertades fundamentales, especialmente cuando se encuentren en situaciones de vulnerabilidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="choose-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="choose-thumb">
                        <i class="flaticon-clock"></i>
                    </div>
                    <div class="choose-content">
                        <h5 class="title">Verdad Material</h5>
                        <p>Durante el proceso, la Defensoría Universitaria realiza una verificación exhaustiva de los hechos que fundamentan sus decisiones. Para ello, se toma todas las medidas de prueba necesarias y legalmente autorizadas, incluso si no han sido propuestas por los recurrentes o si estos han renunciado a ellas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="bb-dashed"></div>
</div>
<!--=================Chooose Us================= -->

<!--=================Our Offer================= -->
<section class="offer-section bg-ash padding-top padding-bottom">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <h2 class="title">Defensor Universitario</h2>
        </div>
    </div>
    <div class="container mw-lg-100">
        <div class="row align-items-center flex-wrap-reverse">
            <div class="col-lg-6">
                <div class="left-side-offer wow fadeInUp text-justify" data-wow-delay=".3s">
                    <h4 class="title">MVZ. Victor Raúl Cano Fuentes</h4>
                    <p>El Defensor Universitario es la figura presente en la universidad que tiene la responsabilidad de velar por los derechos y garantías de los miembros de la comunidad universitaria, incluyendo estudiantes, profesores y personal administrativo. Su función principal es la defensa de los derechos individuales y colectivos dentro de la institución.</p>
                    <p>El Defensor Universitario actúa de manera independiente y neutral, cuyo objetivo es resolver conflictos, mediar en disputas y asegurar que los procedimientos y normativas de la universidad se apliquen de manera justa y equitativa. También se encarga de recibir quejas, reclamaciones y sugerencias por parte de los miembros de la comunidad universitaria, trabaja para encontrar soluciones adecuadas a cada situación.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-side-offer wow slideInRight" data-wow-delay=".3s">
                    <img class="w-65" src="{{ asset('assets/images/teachers/defensor-universitario-unamba.png') }}" alt="offer">
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================Our Offer================= -->

<!--=================Our Service================= -->
<section class="service-section padding-bottom padding-top">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <span class="cate">our service</span>
            <h2 class="title">what we do in here</h2>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-love"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">Mask SMS</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-sms"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">non Masking SMS</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-mic"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">voice message</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-route"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">location based SMS</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-megaphone"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">promo SMS</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-paper-plane"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">Email Service</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================Our Service================= -->

<!--=================Sponsor Section================= -->
<div class="sponsor-section bg-f3 padding-bottom padding-top">
    <div class="container">
        <div class="sponsor-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor01.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor02.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor03.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor04.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor05.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor06.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor07.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor08.png') }}" alt="sponsor">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================Sponsor Section================= -->
@endsection