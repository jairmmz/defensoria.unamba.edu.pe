@extends('frontend.layouts.app')
@section('content')
    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="{{ asset('assets-front/images/banner/fondo-du-unamba.jpg') }}">
        <div class="container">
            <h1 class="title m-0">Documentos</h1>
        </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{ route('index') }}">Inicio</a>
                </li>
                <li>
                    Documentos
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->

    <!-- Reglamentos -->
    @php
    use Carbon\Carbon;
    @endphp

    <section class="blog-section padding-bottom padding-top">
        <div class="container">
            @foreach ($regulations as $regulation)
                <div class="row bg-ash mb-4">
                    <div class="col-lg-3">
                        <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0">
                            <span class="d-block">
                                Fecha de resolución
                            </span>
                            {{ Carbon::parse($regulation->date_regulation)->format('d/m/y') }}
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex ">
                        <div class="mr-md-4">
                            <a href="{{ asset('assets/documents/' . $regulation->document_regulation) }}" target="_blank" class="h4 mb-3 d-block">{{ Str::limit($regulation->title, 30) }}</a>
                            <p class="mb-0">{{ Str::limit($regulation->description, 130) }}</p>
                        </div>
                    </div>                                     
                    <div class="col-lg-2">
                        <div class="text-center">
                            <a href="{{ asset('assets/documents/' . $regulation->document_regulation) }}" target="_blank" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- /Reglamentos -->
@endsection