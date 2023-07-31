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
        <div class="maps-shape bg_img bg-contain" 
        @if($setting->background_website)
            data-background="{{ asset('assets/images/' . $setting->background_website) }}">
        @else
            data-background="{{ asset('assets-front/images/banner/banner-bg01.png') }}">
        @endif
        </div>
        <div class="shape-thumb">
            <img class="wow slideInUp" data-wow-delay=".7s" src="{{ asset('assets-front/images/micaela-bastidas-wh.png') }}"
                alt="banner">
        </div>
    </section>
    <!-- =============Banner Section============= -->

    <!--=================Bulk Sms================= -->
    <section class="bulk-sms padding-top padding-bottom">
        <div class="container">
            <div class="row flex-wrap-reverse align-items-center">
                <div class="col-lg-6">
                    <div class="bulk-content text-center text-sm-left wow fadeIn" data-wow-delay=".3s">
                        <h3 class="title">¿QUÉ ES LA DEFENSORÍA UNIVERSITARIA?</h3>
                        <p class="text-justify">La Defensoría Universitaria de la UNAMBA, es un órgano autónomo en el
                            ejercicio de sus funciones
                            e independiente de los órganos de gobierno de la Universidad.</p>
                        <p class="text-justify">Es la instancia encargada de la tutela de los derechos de los miembros de la
                            comunidad
                            universitaria y vela por el mantenimiento del principio de autoridad responsable. La defensoría
                            atiende denuncias por infracción a derechos individuales y pueden acudir a ella los estudiantes,
                            docentes, egresados y personal administrativo. El estatuto de la universidad establece los
                            mecanismos de regulación y funcionamiento de la Defensoría. (Art. 133 de la Ley Universitaria N°
                            30220).</p>
                        <a href="https://www.sunedu.gob.pe/sunedu-defensoria-universitaria-instancia-fundamental-para-democracia-gobernanza-calidad-educativa/"
                            class="custom-button active" target="_blank">Leer más</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bulk-thumb wow slideInRight">
                        <img src="{{ asset('assets-front/images/Que-es-defensoría-universitaria.jpg') }}"
                            alt="¿QUÉ ES LA DEFENSORÍA UNIVERSITARIA?">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================Bulk Sms================= -->

    <!--=================Chooose Us================= -->
    <section class="choose-us-section bg-ash padding-top padding-bottom">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h2 class="title">Principios</h2>
            </div>
            <div class="row mb-30-none justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="choose-item text-center wow fadeInUp bg-white" data-wow-delay=".3s">
                        <div class="choose-thumb">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <div class="choose-content">
                            <h5 class="title">Independencia</h5>
                            <p>La Defensoría Universitaria es independiente, asegurando imparcialidad y autonomía en la
                                resolución de conflictos y protección de derechos. Como ente autónomo, toma decisiones sin
                                influencias externas, beneficiando a la comunidad universitaria con transparencia y respeto
                                a los derechos fundamentales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-item text-center wow fadeInUp bg-white" data-wow-delay=".3s">
                            <div class="choose-thumb">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="choose-content">
                            <h5 class="title">Respeto</h5>
                            <p>La institución actuará asegurando el respeto a la integridad de todas las personas en la
                                comunidad universitaria, evitando cualquier tipo de maltrato y garantizando el pleno respeto
                                de sus derechos y libertades fundamentales, especialmente cuando se encuentren en
                                situaciones de vulnerabilidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-item text-center wow fadeInUp bg-white" data-wow-delay=".3s">
                        <div class="choose-thumb">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="choose-content">
                            <h5 class="title">Verdad Material</h5>
                            <p>Durante el proceso, la Defensoría Universitaria realiza una verificación exhaustiva de los
                                hechos que fundamentan sus decisiones. Para ello, se toma todas las medidas de prueba
                                necesarias y legalmente autorizadas, incluso si no han sido propuestas por los recurrentes o
                                si estos han renunciado a ellas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================Chooose Us================= -->

    <!--=================Our Offer================= -->
    <section class="offer-section padding-top padding-bottom">
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
                        <p>El Defensor Universitario es la figura presente en la universidad que tiene la responsabilidad de
                            velar por los derechos y garantías de los miembros de la comunidad universitaria, incluyendo
                            estudiantes, profesores y personal administrativo. Su función principal es la defensa de los
                            derechos individuales y colectivos dentro de la institución.</p>
                        <p>El Defensor Universitario actúa de manera independiente y neutral, cuyo objetivo es resolver
                            conflictos, mediar en disputas y asegurar que los procedimientos y normativas de la universidad
                            se apliquen de manera justa y equitativa. También se encarga de recibir quejas, reclamaciones y
                            sugerencias por parte de los miembros de la comunidad universitaria, trabaja para encontrar
                            soluciones adecuadas a cada situación.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-side-offer wow slideInRight" data-wow-delay=".3s">
                        @if (!$authoritie->image_authority)
                            <img style="w-50"
                                src="{{ asset('assets/images/teachers/defensor-universitario-unamba.png') }}"
                                alt="Defensor Universitario">
                        @else
                            <img style="w-50" src="{{ asset('assets/images/' . $authoritie->image_authority) }}"
                                alt="">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================Our Offer================= -->

    <!--=================Bulk Sms================= -->
    <section class="bulk-sms  bg-ash mask-sms padding-top padding-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bulk-thumb">
                        <img src="{{ asset('assets-front/images/du-mision-vision.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bulk-content text-center text-sm-left">
                        <h3 class="title">Misión</h3>
                        <p class="text-justify">Proteger los derechos y el principio de autoridad en la institución,
                            fomentando una cultura de respeto, colaboración y cordialidad. Prevenimos y resolvemos
                            conflictos, emitiendo recomendaciones y promoviendo el cumplimiento de responsabilidades por
                            parte de las autoridades. Mejoramos los procedimientos con enfoque intercultural y de género
                            para garantizar el respeto de los derechos de la comunidad universitaria.</p>
                        <h3 class="title">Visión</h3>
                        <p class="text-justify">impulsar que la Universidad sea reconocida como un modelo de excelencia en
                            la formación de ciudadanos comprometidos con el fortalecimiento de la democracia y el Estado de
                            derecho en el país. Valoramos y garantizamos los derechos y obligaciones de todos los miembros
                            de la comunidad universitaria, promoviendo su participación activa y el cumplimiento de los
                            propósitos y metas de la institución.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================Bulk Sms================= -->

    {{-- Modal --}}
    @if ($setting->banner_website and $setting->is_active_banner == '1')
        <style>
            .modal-dialog {
                max-width: 800px !important;
            }
        </style>
        <div class="modal" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header mb-2" style="text-align-last:right;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <a href="{{ asset('assets/images/' . $setting->banner_website) }}" target="_blank">
                        <img src="{{ asset('assets/images/' . $setting->banner_website) }}" alt=""
                            class="img_fluid w-100">
                    </a>
                </div>
            </div>
        </div>
        <!-- Modal Ends -->

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Selecciona el modal por su ID
                var myModal = new bootstrap.Modal(document.getElementById('exampleModal-2'));

                // Abre el modal automáticamente
                myModal.show();
            });
        </script>
    @endif
@endsection
