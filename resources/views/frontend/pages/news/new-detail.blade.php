@extends('frontend.layouts.app')
@section('content')
    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="{{ asset('assets-front/images/banner/fondo-du-unamba.jpg') }}">
        <div class="container">
            <h1 class="title m-0">Detalle de noticia</h1>
        </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Inicio</a>
                </li>
                <li>
                    <a href="service.html">Noticia</a>
                </li>
                <li>
                    Detalle
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->

    <!--=================Email Service Section================= -->
    <section class="case-details padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="case-details-content">
                        <h3 class="title">{{ $new->title }}</h3>
                        <p>{{ $new->description }}</p>
                        <div class="case-analysis">
                            <img src="{{ asset('assets/images/' . $new->image) }}" alt="case">
                        </div>
                        <p>Hendrerit id sit, nulla libero sed, odio feugiat dolor vehicula donec nisl justo, niquam
                        velit. Ac neque imperdiet porttitor rutrum sagittis, erat est ante quis dis, adipiscing
                        ctumst condimentum odio lacus, fermentum semper tellsspendisse eu ante, viverra habitant
                        vitae sed. Feugiat risus, nonummy qui nam ut lacinia velit. Cras quisque eu felis consequat
                        amet libero, in velit placerat </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="widget widget-category">
                            <div class="widget-header">
                                <h5 class="title">Otras noticias</h5>
                            </div>
                            <ul>
                                @foreach ($news as $other_new)
                                    <li><a href="{{ route('frontend.news.detail', ['new' => $other_new->id]) }}">{{ $other_new->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--=================Email Service Section================= -->
@endsection