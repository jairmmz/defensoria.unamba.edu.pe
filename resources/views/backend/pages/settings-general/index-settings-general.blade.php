@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Ajustes Generales
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('news') }}">Noticias</a></li>
                <li class="breadcrumb-item active" aria-current="page">Añadir</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="cmxform" id="signupForm" method="get" action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title_website">Título de la página web</label>
                                    <input id="title_website" class="form-control" name="title_website" type="text" value="{{ $setting->title_website }}">
                                    @error('title_website') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="logo_website">Logo de la página web</label>
                                    <input id="logo_website" class="form-control" name="logo_website" type="file">
                                    @error('logo_website') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="background_website">Imagen de fondo</label>
                                    <div class="card">
                                        <input id="background_website" class="form-control" name="background_website" type="file">
                                        @error('background_website') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="number_phone">Número de teléfono/celular</label>
                                    <input id="number_phone" class="form-control" name="number_phone" type="text" value="{{ $setting->number_phone }}">
                                    @error('number_phone') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="link_facebook">Facebook</label>
                                    <input id="link_facebook" class="form-control" name="link_facebook" type="text" value="{{ $setting->link_facebook }}">
                                    @error('link_facebook') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>

                                <input class="form-control" name="id_user" type="hidden" value="{{ Auth::user()->id }}">

                                <input class="btn btn-primary" type="submit" value="Guardar">
                            </div>
                            <div class="col-lg-6">
                                <div class="border-bottom text-center pb-2">
                                    <b>Información de la autoridad</b>
                                </div>
                                <div class="py-4">
                                    <p class="clearfix">
                                        <b class="float-left">
                                            Título de la página web:
                                        </b>
                                        <span class="float-right">
                                            {{ $setting->title_website }}
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <b class="float-left">
                                            Numero de celular/teléfono:
                                        </b>
                                        <span class="float-right">
                                            {{ $setting->number_phone }}
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <b class="float-left">
                                            Link de facebook:
                                        </b>
                                        <span class="float-right">
                                            {{ $setting->link_facebook }}
                                        </span>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <b>Logo de la página web</b><br>
                                    @if (!$setting->logo_website)
                                    <img style="width: 150px" src="{{ asset('assets/images/users/user-default.png') }}" alt="">
                                    @else
                                    <img style="width: 150px" src="{{ asset('assets/images/' . $authoritie->image_authority) }}" alt="">
                                    @endif
                                </div>
                                <div class="text-center">
                                    <b>Fondo de pantalla de la página web</b><br>
                                    @if (!$setting->logo_website)
                                    <img style="width: 150px" src="{{ asset('assets/images/users/user-default.png') }}" alt="">
                                    @else
                                    <img style="width: 150px" src="{{ asset('assets/images/' . $authoritie->image_authority) }}" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
