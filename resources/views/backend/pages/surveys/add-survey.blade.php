@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Añadir encuesta
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('surveys') }}">Reglamentos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Añadir</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">FORMULARIO DE REGISTRO</h4>
                    <form method="POST" action="{{ route('surveys.save') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{ method_field("POST") }}
                        <div class="form-group">
                            <label for="name">Título</label>
                            <input id="name" class="form-control" name="name" type="text">
                            @error('name') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="desciption" name="description" rows="4"></textarea>
                            @error('description') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label for="url">URL de la encuesta</label>
                                    <input name="url" type="text" class="form-control"/>
                                    @error('url') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="is_active">Estado</label>
                                    <select class="form-control" name="is_active" id="">
                                        <option value="1" selected>Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="document_regulation">Documento</label>
                            <div class="card">
                                <div class="card-body">
                                    <input type="file" class="dropify" name="document_regulation" />
                                </div>
                            </div>
                            @error('document_regulation') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <input class="form-control" name="id_user" type="hidden" value="{{ Auth::user()->id }}">

                        <input class="btn btn-primary" type="submit" value="Añadir">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
