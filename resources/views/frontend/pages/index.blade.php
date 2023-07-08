@extends('frontend.layouts.app')
@section('content')
    <!-- hero slider -->
    <section class="hero-section overlay bg-cover scroll-section"  id="home" data-background="{{ asset('assets/images/banner/fondo-du-unamba.jpg') }}">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Defensoría
                                Universitaria</h1>
                            <h4 class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Velamos por los
                                derechos de los estudiantes, docentes y personal administrativo de la Universidad
                                Nacional Micaela Bastidas de Apurímac</h4>
                            <a href="mailto:defensoriauniversitaria@unamba.edu.pe" class="btn btn-primary"
                                data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3"
                                data-animation-in="fadeInLeft" data-delay-in=".7">Contáctanos</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Defensoría
                                Universitaria</h1>
                            <h4 class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">En la Defensoría
                                Universitaria velamos por el respeto de la Comunidad Universitaria</h4>
                            <a href="mailto:defensoriauniversitaria@unamba.edu.pe" class="btn btn-primary"
                                data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                                data-animation-in="fadeInDown" data-delay-in=".7">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /hero slider -->

    <!-- about us -->
    <section class="section scroll-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="section-title">¿Qué es la Defensoría Universitaria?</h2>
                    <p class="text-justify">La Defensoría Universitaria de la UNAMBA, es un órgano autónomo en el ejercicio de sus funciones
                        e independiente de los órganos de gobierno de la Universidad.</p>
                    <p class="text-justify">Es la instancia encargada de la tutela de los derechos de los miembros de la comunidad universitaria y vela por el mantenimiento del principio de autoridad responsable. La defensoría atiende denuncias por infracción a derechos individuales y pueden acudir a ella los estudiantes, docentes, egresados y personal administrativo. El estatuto de la universidad establece los mecanismos de regulación y funcionamiento de la Defensoría. (Art. 133 de la Ley Universitaria N° 30220).</p>
                    <a href="https://www.sunedu.gob.pe/sunedu-defensoria-universitaria-instancia-fundamental-para-democracia-gobernanza-calidad-educativa/" target="_blank" class="btn btn-outline-primary">Leer más</a>
                </div>
                <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="{{ asset('assets/images/about/Qué-es-la-defensoría.universitaria.png') }}"
                        alt="about image">
                </div>
            </div>
        </div>
    </section>
    <!-- /about us -->

    <!-- success story -->
    <section class="section bg-gray scroll-section" id="beginning">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-sm-12 text-center mb-4">
                    <h2>Nuestros Principios</h2>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="bg-white p-5">
                        <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="section-title">Independencia</h3>
                        <p>La Defensoría Universitaria es independiente, asegurando imparcialidad y autonomía en la resolución de conflictos y protección de derechos. Como ente autónomo, toma decisiones sin influencias externas, beneficiando a la comunidad universitaria con transparencia y respeto a los derechos fundamentales.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="bg-white p-5">
                        <i class="ti-user mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="section-title">Respeto</h3>
                        <p>La institución actuará asegurando el respeto a la integridad de todas las personas en la comunidad universitaria, evitando cualquier tipo de maltrato y garantizando el pleno respeto de sus derechos y libertades fundamentales, especialmente cuando se encuentren en situaciones de vulnerabilidad.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="bg-white p-5">
                        <i class="ti-search mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="section-title">Verdad Material</h3>
                        <p>Durante el proceso, la Defensoría Universitaria realiza una verificación exhaustiva de los hechos que fundamentan sus decisiones. Para ello, se toma todas las medidas de prueba necesarias y legalmente autorizadas, incluso si no han sido propuestas por los recurrentes o si estos han renunciado a ellas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /success story -->

    <!-- authorities details -->
    <section class="section" id="authorities">
        <div class="container">
            <h2 class="section-title">Defensor Universitario</h2>
            <div class="row">
                <div class="col-md-5 mb-5">
                    <img class="img-fluid w-100" src="{{ asset('assets/images/teachers/defensor-universitario-unamba.png') }}" alt="teacher">
                </div>
                <div class="col-md-7 mb-5">
                    <h3>MVZ. Victor Raúl Cano Fuentes</h3>
                    <h6 class="text-color">Defensor Universitario</h6>
                    <p class="text-justify">El Defensor Universitario es la figura presente en la universidad que tiene la responsabilidad de velar por los derechos y garantías de los miembros de la comunidad universitaria, incluyendo estudiantes, profesores y personal administrativo. Su función principal es la defensa de los derechos individuales y colectivos dentro de la institución.</p>
                    <p class="text-justify">El Defensor Universitario actúa de manera independiente y neutral, cuyo objetivo es resolver conflictos, mediar en disputas y asegurar que los procedimientos y normativas de la universidad se apliquen de manera justa y equitativa. También se encarga de recibir quejas, reclamaciones y sugerencias por parte de los miembros de la comunidad universitaria, trabaja para encontrar soluciones adecuadas a cada situación.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /authorities details -->

    <!-- success story -->
    <section class="section bg-cover" id="mission" data-background="{{ asset('assets/images/backgrounds/success-story.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="bg-white p-5">
                        <h2 class="section-title">Nuestra Misión</h2>
                        <p class="text-justify">Nuestra misión es proteger los derechos y el principio de autoridad en la institución, fomentando una cultura de respeto, colaboración y cordialidad. Prevenimos y resolvemos conflictos, emitiendo recomendaciones y promoviendo el cumplimiento de responsabilidades por parte de las autoridades. Mejoramos los procedimientos con enfoque intercultural y de género para garantizar el respeto de los derechos de la comunidad universitaria.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="bg-white p-5">
                        <h2 class="section-title">Nuestra Visión</h2>
                        <p class="text-justify">Nuestra visión es la de impulsar que la Universidad sea reconocida como un modelo de excelencia en la formación de ciudadanos comprometidos con el fortalecimiento de la democracia y el Estado de derecho en el país. Valoramos y garantizamos los derechos y obligaciones de todos los miembros de la comunidad universitaria, promoviendo su participación activa y el cumplimiento de los propósitos y metas de la institución.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /success story -->

    <!-- Functions -->
    <section class="section" id="functions">
        <div class="container">
            <h2 class="section-title">Funciones de la Defensoría Universitaria</h2>
            <div class="row">
                <div class="col-md-12">
                    <p>La Defensoría Universitaria de la UNAMBA, es un órgano autónomo en el ejercicio de sus funciones e independiente de los órganos de gobierno de la Universidad. Esta encargada de:</p>
                    <ul class="list-styled">
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- scholarship item -->
                <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
                    <div class="row card-body">
                        <div class="col-lg-6 col-sm-6 mb-6 mb-lg-0">
                            <ul class="list-styled text-justify">
                                <li>Velar por el respeto de los derechos de docentes, estudiantes y trabajadores administrativos de la Comunidad Universitaria, frente a actos u omisiones de las autoridades o funcionarios de la Universidad que los vulneren.</li>
                                <li>Es competente para Conocer denuncias y reclamaciones que formulen los miembros de la comunidad universitaria vinculadas con la infracción de sus derechos individuales.</li>
                                <li>Proponer normas, políticas y acciones que permitan mejorar la defensa de los derechos de las personas en diferentes servicios que la Universidad brinda.</li>
                                <li>Se rige por la Constitución, Ley Universitaria, Estatuto, su reglamento y demás normas internas que le sean aplicables.</li>
                                <li>Toda actuación de la Defensoría Universitaria debe garantizar la absoluta confidencialidad, dando cuenta a las autoridades competentes según sea el caso, guardando el principio de reserva.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-6 mb-6 mb-lg-0">
                            <ul class="list-styled text-justify">
                                <li>Los pronunciamientos, las recomendaciones y las propuestas de la Defensoría Universitaria no tienen carácter vinculante; por consiguiente no pueden modificar acuerdos o resoluciones emanadas de los órganos de gobierno de la Universidad, que corresponden a un procedimiento de la Ley y normas conexas.</li>
                                <li>Emite recomendaciones y sugerencias a los responsables de los órganos de gobierno y demás instancias administrativas para prevenir vulneraciones, reservándose el derecho de trasladar las infracciones a las instancias correspondientes.</li>
                                <li>Orienta acerca de procedimientos y vías correspondientes para canalizar quejas, denuncias o reclamaciones que no sean de su competencia.</li>
                                <li>Solicita medios probatorios de denuncias interpuestas a autoridades, docentes, estudiantes o personal administrativo.</li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- /functions -->

    <!-- format details -->
    <section class="section bg-gray" id="format">
        <div class="container">
            <h2 class="section-title">DEFINICIONES DEL PRESENTE FORMATO</h2>
            <div class="row">
                <div class="col-md-7">
                    <ul class="list-styled text-justify">
                        <li><b>Formato de Solicitud:</b> Solicitud de cualquier miembro de la Comunidad Universitaria para formular una queja o petición.</li>
                        <li><b>Quejado:</b> Es la persona autoridad, docente, estudiante o funcionario a quienes el recurrente estima que ha vulnerado sus derechos.</li>
                        <li><b>Queja:</b> Una solicitud se califica como queja cuando un miembro de la comunidad universitaria o un grupo de ellos requiere la intervención de la Defensoría Universitaria ante una vulneración o peligro de vulneración de un derecho fundamental por la acción de una entidad de la administración o docencia universitaria. Una queja se atiende con el fin de proteger a las personas, cesar los actos arbitrarios y/o negligentes y con el fin de restituir sus derechos.</li>
                        <li>Una solicitud se califica como petitorio cuando un miembro de la comunidad universitaria requiere atención y que se le solucione su situación o su problema de indefensión que afecta o amenaza los derechos fundamentales que no representa un incumplimiento de los deberes de los diferentes órganos y servicios universitarios; pero que éstos pueden atender en ejercicio de sus funciones y competencias.</li>
                        <li>Una solicitud se califica como petitorio cuando un miembro de la comunidad universitaria requiere información y consejo sobre asuntos jurídicos, institucionales, de apoyo social o sicológico que no implican la afectación a derechos fundamentales o que se refieren a temas ajenos a la competencia de la Defensoría Universitaria. La consulta será atendida con la respectiva orientación sobre las vías pertinentes para hacer valer sus derechos.</li>
                    </ol>
                    <a href="documents/FORMATO DE SOLICITUD DE DEFENSORIA UNIVERSITARIA 2023.docx" class="btn btn-primary h4 mb-3 d-block">Descargar Formato</a>
                </div>
                <div class="col-md-5 justify-content-center" data-background="{{ asset('assets/images/formato-solicitud.png') }}">
                </div>
            </div>
        </div>
    </section>
    <!-- /format details -->

    <!-- Reglamentos -->
    <section class="section" id="resolutions">
        <div class="container">
        <div class="row">
            <h2 class="section-title">Reglamentos</h2>
            <div class="col-12">
            <ul class="list-unstyled">
                <!-- notice item -->
                <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">07</span> Agto,2020</div>
                <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                    <a href="documents/RESOLUCION-N°011-2020-AU-Reglamento-Defensoria-Universitaria.pdf" target="_blank" class="h4 mb-3 d-block">Reglamento General de Defensoria Universitaria</a>
                    <p class="mb-0">ARTICULO SEGUNDO.- APROBAR a partir del 31 de julio del 2020, el <b>REGLAMENTO GENERAL DE DEFENSORIA UNIVERSITARIA</b>, presentado por la Defensora Universitaria, [...]</p>
                </div>
                <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="documents/RESOLUCION-N°011-2020-AU-Reglamento-Defensoria-Universitaria.pdf" target="_blank" class="btn btn-primary">Leer más</a></div>
                </li>
                <!-- notice item -->
                <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">10</span> Feb,2023</div>
                <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                    <a href="documents/RESOLUCIÓN-N°-004-2023-AU-UNAMBA-DESIGNACION-DEFENSOR-2023.pdf" target="_blank" class="h4 mb-3 d-block">Resolución que aprueba la elección de Defensor Universitario</a>
                    <p class="mb-0">ARTÍCULO PRIMERO. - APROBAR la elección <b>del Defensor Universitario</b> de la Universidad Nacional Micaela Bastidas de Apurímac, al Docente Asociado <b>MVZ. Victor Raúl Cano Fuentes</b> a partir del 10 de febrero del 2022, con las atribuciones y responsabilidades inherentes al cargo.</p>
                </div>
                <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="documents/RESOLUCIÓN-N°-004-2023-AU-UNAMBA-DESIGNACION-DEFENSOR-2023.pdf" target="_blank" class="btn btn-primary">Leer más</a></div>
                </li>
                <!-- notice item -->
                <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">06</span> Agto,2021</div>
                <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                    <a href="documents/RES-N°169-RESOLUCION-PLAN-MULTIANUAL-DEFENSORIA UNIV_1.pdf" target="_blank" class="h4 mb-3 d-block">Plan de Trabajo Multianual para el Desarrollo de Actividades - 2021 al 2023</a>
                    <p class="mb-0">ARTÍCULO PRIMERO. - APROBAR la elección <b>del Defensor Universitario</b> de la Universidad Nacional Micaela Bastidas de Apurímac, al Docente Asociado <b>MVZ. Victor Raúl Cano Fuentes</b> a partir del 10 de febrero del 2022, con las atribuciones y responsabilidades inherentes al cargo.</p>
                </div>
                <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="documents/RES-N°169-RESOLUCION-PLAN-MULTIANUAL-DEFENSORIA UNIV_1.pdf" target="_blank" class="btn btn-primary">Leer más</a></div>
                </li>
                <!-- notice item -->
                <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">13</span> May,2022</div>
                <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                    <a href="documents/RES-N°118-2022-CU-UNAMBA-REGLAMENTO-PREVENSIÓN-HOSTIGAMIENTO-SEXUAL.pdf" target="_blank" class="h4 mb-3 d-block">Reglamento para la prevención e intervención de hostigamiento sexual.</a>
                    <p class="mb-0">ARTÍCULO PRIMERO. - APROBAR el <b>Reglamento para la Prevensión e Intervención de casos de Hostigamientos Sexual en la Universidad Nacional Micaela Bastidas de Apurímac</b>; que en anexo de trece (13) folios, forma parte de la presente Resolución.</p>
                </div>
                <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="documents/RES-N°118-2022-CU-UNAMBA-REGLAMENTO-PREVENSIÓN-HOSTIGAMIENTO-SEXUAL.pdf" target="_blank" class="btn btn-primary">Leer más</a></div>
                </li>
                <!-- notice item -->
                <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">13</span> May,2022</div>
                <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                    <a href="documents/RESOLUCIÓN-N°146-2022-R-UNAMBA-COMITE-HOSTIGAMIENTO-2022.pdf" target="_blank" class="h4 mb-3 d-block">Comité de Defensoria Universitaria e Intervención frente al Hostigamiento Sexual</a>
                    <p class="mb-0">ARTÍCULO PRIMERO. - CONFORMAR la <b>Comisión para la Prevensión e Intervención de casos de hostigamiento sexual</b> en la Universidad Nacional Micaela Bastidas de Apurímac, para el semestre académico 2022-I y 2022-2, a propuesta de la Defensoría Universitaria;</p>
                </div>
                <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="documents/RESOLUCIÓN-N°146-2022-R-UNAMBA-COMITE-HOSTIGAMIENTO-2022.pdf" target="_blank" class="btn btn-primary">Leer más</a></div>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </section>
    <!-- /Reglamentos -->
@endsection