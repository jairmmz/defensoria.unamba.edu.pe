@extends('backend.layouts.app')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="page-header">
        <h3 class="page-title">
            Lista de Quejas y Denuncias
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('attention-form-index') }}">Lista de Quejas y Denuncias</a></li>
            </ol>
        </nav>
    </div>

    <!--=================Account Section================= -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="attention-form" method="POST" action="{{ route('attention-form.save') }}"
                        enctype="multipart/form-data" autocomplete="off">
                        {{ csrf_field() }}
                        @method('POST')
                        <h4 class="account-title mb-4">Datos del solicitante</h4>
                        <div class="form-group">
                            <label for="title">Nombres y Apellido</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                            @error('title') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Código/DNI</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                            @error('description') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Cargo</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                            @error('image') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="link_to_news">Tipo de solicitud</label>
                            <input id="link_to_news" class="form-control" name="link_to_news" type="text" value="{{ old('link_to_news') }}">
                            @error('link_to_news') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="is_active">Asunto</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="is_active">Escuela académico profesional</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="is_active">Centro de trabajo/oficina</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="is_active">Dirección</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="is_active">Número de celular/teléfono</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="is_active">Correo electrónico</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                        </div>
                        <hr>
                        <h4 class="account-title mb-4">Datos del quejado / denunciado</h4>
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                            @error('title') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="desciption" name="description" rows="10">{{ old('description') }}</textarea>
                            @error('description') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <div class="card">
                                <div class="card-body">
                                    <input type="file" class="dropify" name="image" />
                                </div>
                            </div>
                            @error('image') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label for="link_to_news">Enlace de la noticia</label>
                                    <input id="link_to_news" class="form-control" name="link_to_news" type="text" value="{{ old('link_to_news') }}">
                                    @error('link_to_news') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="is_active">Estado</label>
                                    <select class="form-control" name="is_active">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" name="id_user" type="hidden" value="{{ Auth::user()->id }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
