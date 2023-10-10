@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Añadir noticia
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
                    <h4 class="card-title">FORMULARIO DE REGISTRO</h4>
                    <form method="POST" action="{{ route('news.save') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{ method_field("POST") }}
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}">
                            @error('title') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea id="description" class="form-control" name="description" rows="5">{{ old('description') }}</textarea>
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
                            <div class="col-lg-6">
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
                        {{-- <button type="submit" class="btn btn-primary">Guardar</button> --}}
                        <div class="d-flex justify-content-between mb-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <div>
                                <a href="{{ route('news') }}" class="btn btn-danger btn-icon-text">
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
