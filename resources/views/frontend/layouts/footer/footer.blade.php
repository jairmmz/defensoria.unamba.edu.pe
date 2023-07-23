<!--=================Footer Section================= -->
<footer>
    <div class="footer-top padding-top padding-bottom">
        <div class="container">
            <div class="row mb-50-none">
                <div class="col-sm-6 col-lg-6">
                    <div class="footer-widget footer-link">
                        {{-- <h5 class="title">Datos generales</h5> --}}
                        <div class="logo mb-2">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-du-unamba.png') }}" alt="logo"></a>
                        </div>
                        <ul>
                            <li>
                                <span>Av. Garcilazo de la Vega S/N Tamburco - Abancay - Apurímac</span>
                            </li>
                            <li>
                                <span>Horario de atención: Lunes a Viernes de 07:30-13:00 y 14:00-15:30</span>
                            </li>
                            <li>
                                <span>defensoriauniversitaria@unamba.edu.pe</span>
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
                        <p>Velamos por los derechos de la Comunidad Universitaria.</p>
                        <ul class="footer-social">
                            <li>
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </li>
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
