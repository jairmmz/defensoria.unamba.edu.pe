<!--=================Footer Section================= -->
<footer>
    <div class="footer-top padding-top padding-bottom">
        <div class="container">
            <div class="row mb-50-none">
                <div class="col-sm-6 col-lg-6">
                    <div class="footer-widget footer-link">
                        <div class="logo mb-2">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-du-unamba.png') }}" alt="logo"></a>
                        </div>
                        <ul>
                            <li>
                                <b>Celular/Teléfono: </b>
                                <span>{{ $setting->number_phone }}</span>
                            </li>
                            <li>
                                <b>Horario de atención:</b>
                                <span> Lunes a Viernes de 07:30-13:00 y 14:00-15:30</span>
                            </li>
                            <li>
                                <b>defensoriauniversitaria@unamba.edu.pe</b>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget footer-link">
                        <h5 class="title">Enlaces</h5>
                        <ul>
                            <li>
                                <a href="{{ route('frontend.index.news') }}">Noticias</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.procedures') }}">Procedimientos</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.services') }}">Servicios</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.documents') }}">Documentos</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.attention-form') }}">Módulo de atención</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget footer-about">
                        <h5 class="title">Defensoría Universitaria</h5>
                        <p>Ubicanos en el primer piso del pabellón de Ing. Informática y Sistemas.</p>
                            <a href="https://www.unamba.edu.pe">
                                <img src="{{ asset('assets/images/Logotipo-UNAMBA-página-web.png') }}" width="80%" alt="">
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-3 py-sm-4 text-center">
        <div class="container">
            <p class="m-0">
                Copyright ©
                <script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear+",");
            </script>
            Defensoría Universitaria - UNAMBA</p>
        </div>
    </div>
</footer>
<!--=================Footer Section================= -->
