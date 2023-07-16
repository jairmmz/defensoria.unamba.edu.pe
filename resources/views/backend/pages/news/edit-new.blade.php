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
                    <form action="{{ route('news.update', ['new' => $new->id]) }}" enctype="multipart/form-data" autocomplete="off" method="POST">
                        @csrf
                        {{ method_field("PATCH") }}
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ $new->title }}">
                            @error('title') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="desciption" name="description" rows="10">{{ $new->description }}</textarea>
                            @error('description') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="image">Imagen</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <input type="file" class="dropify" name="image"/>
                                        </div>
                                    </div>
                                    @error('image') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-5 text-center">
                                @if (!$new->image)
                                    <p>Imagen por defecto</p>
                                    <img style="width: 150px" src="{{ asset('assets/images/logo-du-unamba-min.png') }}" alt="">
                                @else
                                    <p>Imagen actual</p>
                                    <img style="width: 150px" src="{{ asset('assets/images/' . $new->image) }}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label for="link_to_news">Enlace de la noticia</label>
                                    <input id="link_to_news" class="form-control" name="link_to_news" type="text" value="{{ $new->link_to_news }}">
                                    @error('link_to_news') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="password">Estado</label>
                                    <select class="form-control" name="is_active" id="">
                                        <option value="1" {{ $new->is_active == '1' ? 'selected' : '' }}>Activo</option>
                                        <option value="0" {{ $new->is_active == '0' ? 'selected' : '' }}>Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" name="id_user" type="hidden" value="{{ Auth::user()->id }}">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <div class="d-inline">
                              <a href="{{ route('news') }}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>                          
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
