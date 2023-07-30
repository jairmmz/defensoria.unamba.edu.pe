@extends('frontend.layouts.app')
@section('content')
@section('body_attributes')
    data-spy="scroll" data-offset="170" data-target=".privacy-sidebar-content"
@endsection
<style>
    section {
        scroll-margin-top: 90px;
    }
</style>
<!-- =============Hero Area============= -->
<section class="hero-area bg_img" data-background="{{ asset('assets-front/images/banner/fondo-du-unamba.jpg') }}">
    <div class="container">
        <h1 class="title m-0">Procedimientos</h1>
    </div>
</section>
<div class="breadcrumb-section">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="index.html">Inicio</a>
            </li>
            <li>
                <a href="service.html">Procedimientos</a>
            </li>
        </ul>
    </div>
</div>
<!-- =============Hero Area============= -->

<section class="privacy-section padding-top padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-md-block d-none">
                <div class="privacy-sidebar-content">
                    <h6 class="title">Presentación de quejas y reclamaciones</h6>
                    <ul>
                        <li>
                            <a class="nav-link" href="#data-one">¿Quién puede acudir a la Defensoría Universitaria?</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#data-two">¿Cuándo se presenta una denuncia y/o reclamación?</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#data-three">¿Cuáles son los requisitos para presentar una denuncia y/o reclamación?</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#data-four">¿Cómo puedes presentar tu consulta, denuncia y/o reclamación?</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#data-five">¿Cuándo una denuncia y/o reclamación no procede?</a>
                        </li>
                    </ul>
                    <h6 class="title">Consultas</h6>
                    <ul>
                        <li>
                            <a class="nav-link" href="#data-six">¿Cuándo se formula una consulta?</a>
                        </li>
                    </ul>
                    <h6 class="title">Funciones y atribuciones</h6>
                    <ul>
                        <li>
                            <a class="nav-link" href="#data-eight">Funciones y atribuciones del Defensor Universitario</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="privacy-content text-justify" >
                    <section class="mb-4" id="data-one">
                        <h4 class="title" >¿Quién puede acudir a la Defensoría Universitaria?</h4>
                        <p>Puede acudir cualquier miembro de la comunidad universitaria en forma individual, sin restricción alguna.</p>
                    </section>
                    <section class="mb-4" id="data-two">
                        <h4 class="title" >¿Cuándo se presenta una denuncia y/o reclamación?</h4>
                        <p>Se presenta cuando veas vulnerados tus derechos individuales y te encuentres en una situación de discriminación, indefensión o arbitrariedad provocada por autoridades o personal de la universidad o en el caso de violaciones graves de los derechos y libertades cuando se conozcan por cualquier medio.</p>
                    </section>
                    <section class="mb-4" id="data-three">
                        <h4 class="title">¿Cuáles son los requisitos para presentar una denuncia y/o reclamación?</h4>
                        <p>Toda denuncia y/o reclamación debe contener los siguientes requisitos:</p>
                        <ol>
                            <li>Datos generales de identificación del denunciante o su representante tales como nombres y apellidos completos, número de documento nacional de identidad o de carnet universitario en el caso de estudiantes, domicilio procesal.</li>
                            <li>Indicar, y de ser el caso acreditar, la vinculación con la Universidad.</li>
                            <li>De existir vía previa, indicar cómo se ha agotado la vía previa o procedimientos internos para la atención del mismo establecidos por la Universidad.</li>
                            <li>Exposición clara de los hechos que motivan la denuncia y/o reclamación.</li>
                            <li>Medios probatorios idóneos que sustenten la denuncia y/o reclamación.</li>
                        </ol>
                    </section>
                    <section class="mb-4" id="data-four">
                        <h4 class="title">¿Cómo puedes presentar tu consulta, denuncia y/o reclamación?</h4>
                        <p>Puedes presentar tu consulta, denuncia y/o reclamación:</p>
                        <ul class="bullet-list">
                            <li><b>De manera presencial:</b> de acuerdo al horario de atención definido y publicado.</li>
                            <p>Toda consulta, denuncia y/o reclamación se deberá presentar por escrito debidamente suscrito por el denunciante y/o reclamante, dirigido al defensor universitario.</p>
                            <li><b>De manera virtual:</b> a través del <a href="{{ route('frontend.attention-form') }}">Formulario de atención online.</a></li>
                            <p>En caso la denuncia y/o reclamación sea presentado en <a href="{{ route('frontend.attention-form') }}">Formulario de atención online</a>, se deberá enviar toda la documentación oportuna.</p>
                        </ul>
                        <p>Es indispensable consignar una dirección electrónica para el envío de la respuesta.</p>
                    </section>
                    <section class="mb-4" id="data-five">
                        <h4 class="title">¿Cuándo una denuncia y/o reclamación no procede?</h4>
                        <p>El defensor universitario declarará improcedente las denuncias y/o reclamaciones, entre otros, en los siguientes casos:</p>
                        <ol>
                            <li>Cuando sean anónimas.</li>
                            <li>Cuando respecto de la cuestión planteada no se haya acreditado el agotamiento de la vía previa conforme a los procedimientos internos para la atención del mismo establecidos por la Universidad.</li>
                            <li>Cuando no exista legitimidad y/o interés para obrar.</li>
                            <li>Cuando no corresponda a las competencias de la Defensoría Universitaria señaladas en la Ley Universitaria.</li>
                            <li>Cuando el interesado no sea miembro de la comunidad universitaria de la Universidad.</li>
                            <li>Cuando se encuentre en vía de respuesta por alguna instancia de la Universidad.</li>
                            <li>Cuando la responsabilidad de la posible infracción corresponda a personas ajenas a la Universidad.</li>
                        </ol>
                    </section>
                    <section class="mb-4" id="data-six">
                        <h4 class="title">¿Cuándo se formula una consulta?</h4>
                        <p>Cuando se quiere conocer el alcance de los derechos y obligaciones de los miembros de la comunidad universitaria, así como el procedimiento de intervención del defensor universitario y la naturaleza de sus funciones.</p>
                    </section>
                    <section class="mb-4" id="data-eight">
                        <h4 class="title">Funciones y atribuciones del Defensor Universitario</h4>
                        <ul class="bullet-list">
                            <li>Promover, orientar y difundir en la Comunidad Universitaria, el respeto y tutela de los Derechos Humanos.</li>
                            <li>Recibir y tramitar las quejas así como proponer las soluciones que correspondan ante las instancias pertinentes del Gobierno Universitario.</li>
                            <li>Formular recomendaciones a los órganos de gobierno sobre asuntos de violación de derechos que hayan sido sometidos a su conocimiento.</li>
                            <li>Proponer acciones, normas y políticas que permitan mejorar el respeto y defensa de los derechos de las personas en los diferentes servicios que la institución brinda a estudiantes, docentes y personal administrativo.</li>
                            <li>Garantizar el principio de autoridad responsable, la justicia e igualdad para todos, la confidencialidad en su actuación y el respeto a la Constitución Política del Perú, a la Ley Universitaria y al Estatuto de la Universidad.</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
