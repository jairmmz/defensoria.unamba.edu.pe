@extends('frontend.layouts.app')
@section('content')
   <!-- =============Hero Area============= -->
   <section class="hero-area bg_img" data-background="{{ asset('assets-front/images/banner/fondo-du-unamba.jpg') }}">
    <div class="container">
        <h1 class="title m-0">Noticias</h1>
    </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{ route('index') }}">Inicio</a>
                </li>
                <li>
                    Noticias
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->
    @php
    use Carbon\Carbon;
    @endphp
    <!--=================Sponsor Section================= -->
    <section class="blog-section padding-bottom padding-top">
        <div class="container">
            <div class="row mb-30-none justify-content-center">
                @foreach ($news as $new)
                    <div class="col-md-6 col-lg-4">
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="{{ route('frontend.news.detail', ['new' => $new->id]) }}">
                                    <img src="{{ asset('assets/images/' . $new->image) }}" alt="blog">
                                </a>
                                <div class="post-date">
                                    <span>{{ Carbon::parse($new->created_at)->format('d/m/y') }}</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h4 class="title">
                                    <a href="{{ route('frontend.news.detail', ['new' => $new->id]) }}">{{ $new->title }}</a>
                                </h4>
                                <p>{{ Str::limit($new->description, 70) }}</p>
                                <a class="read-more" href="{{ route('frontend.news.detail', ['new' => $new->id]) }}">Leer más... <i
                                        class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=================Sponsor Section================= -->
@endsection