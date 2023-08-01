@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Ajustes Generales
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('settings') }}">Ajustes generales</a></li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('settings.update') }}" enctype="multipart/form-data" autocomplete="off" method="POST">
                        @csrf
                        {{ method_field("PATCH") }}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title_website">Nombre oficial del año</label>
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
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="banner_website">Banner de página principal</label>
                                            <div class="card">
                                                <input id="banner_website" class="form-control" name="banner_website" type="file">
                                                @error('banner_website') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="is_active_banner">Estado</label>
                                            <select class="form-control" name="is_active_banner">
                                                <option value="1" {{ $setting->is_active_banner == '1' ? 'selected' : '' }}>Activo</option>
                                                <option value="0" {{ $setting->is_active_banner == '0' ? 'selected' : '' }}>Inactivo</option>
                                            </select>
                                        </div>
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
                                    <b>Información actual</b>
                                </div>
                                <div class="border-bottom text-center pb-2">
                                    <b>Logo de la página web</b><br>
                                    @if (!$setting->logo_website)
                                        <img style="width: 150px" src="{{ asset('assets/images/users/logo-du-unamba.png') }}" alt="">
                                    @else
                                        <img style="width: 150px" src="{{ asset('assets/images/' . $setting->logo_website) }}" alt="">
                                    @endif
                                </div>
                                <div class="border-bottom text-center pb-2">
                                    <b class="pb-2">Banner de la página de inicio</b><br>
                                    @if (!$setting->banner_website)
                                        <span>Sin banner que mostrar.</span>
                                    @else
                                        <img src="{{ asset('assets/images/' . $setting->banner_website) }}" class="w-50" alt="">
                                    @endif
                                </div>
                                <div class="border-bottom text-center">
                                    <b>Fondo de pantalla de la página web</b><br>
                                    @if (!$setting->background_website)
                                        <img src="{{ asset('assets-front/images/banner/bg-white.png') }}" class="w-50" alt="">
                                    @else
                                        <img src="{{ asset('assets/images/' . $setting->background_website) }}" class="w-75" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (Session::has('message'))
    <script>
        swal("Mensaje", "{{ Session::get('message') }}", "success", {
            button: true,
            button: "Aceptar",
            timer: 3000,
        });
    </script>
    @endif
@endsection
