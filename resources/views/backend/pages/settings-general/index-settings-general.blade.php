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
                    <form class="cmxform" id="signupForm" method="get" action="#">
                        <fieldset>
                            <div class="form-group">
                                <label for="title">Título</label>
                                <input id="title" class="form-control" name="title" type="text">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea class="form-control" id="desciption" name="description" rows="4"></textarea>
                                {{-- <input id="lastname" class="form-control" name="lastname" type="textarea"> --}}
                            </div>
                            <div class="form-group">
                                <label for="username">Imagen</label>
                                <div class="card">
                                    <div class="card-body">
                                        <input type="file" class="dropify" name="image" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label for="link_to_news">Enlace</label>
                                        <input id="link_to_news" class="form-control" name="link_to_news" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="password">Estado</label>
                                        <select class="form-control" name="is_active" id="">
                                            <option value="">Activo</option>
                                            <option value="">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
