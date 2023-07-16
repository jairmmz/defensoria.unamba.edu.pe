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
                                    <label for="password">Estado</label>
                                    <select class="form-control" name="is_active" id="">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" name="id_user" type="hidden" value="{{ Auth::user()->id }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
