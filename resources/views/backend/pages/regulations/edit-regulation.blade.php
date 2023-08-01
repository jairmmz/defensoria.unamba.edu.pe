@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Editar documento
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('regulations') }}">Documentos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('regulations.update', ['regulation' => $regulation->id]) }}" enctype="multipart/form-data" autocomplete="off" method="POST">
                        @csrf
                        {{ method_field("PATCH") }}
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input id="title" class="form-control" name="title" type="text" value="{{ $regulation->title }}">
                            @error('title') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="desciption" name="description" rows="4">{{ $regulation->description }}</textarea>
                            @error('description') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label for="date_regulation">Fecha de publicación</label>
                                    <input name="date_regulation" type="date" class="form-control" data-inputmask="'alias': 'date'" value="{{ $regulation->date_regulation }}"/>
                                    @error('date_regulation') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="is_active">Estado</label>
                                    <select class="form-control" name="is_active" id="">
                                        <option value="1" {{ $regulation->is_active == '1' ? 'selected' : '' }}>Activo</option>
                                        <option value="0" {{ $regulation->is_active == '0' ? 'selected' : '' }}>Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="document_regulation">Documento</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <input type="file" class="dropify" name="document_regulation" />
                                        </div>
                                    </div>
                                    @error('document_regulation') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <label for="document_regulation">Documento actual:</label><br>
                                <a href="{{ asset('assets/documents/' . $regulation->document_regulation) }}" target="_blank">{{ $regulation->document_regulation }}</a>
                            </div>
                        </div>
                        <input class="form-control" name="id_user" type="hidden" value="{{ Auth::user()->id }}">

                        {{-- <input class="btn btn-primary" type="submit" value="Guardar"> --}}
                        <div class="d-flex justify-content-between mb-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <div>
                                <a href="{{ route('regulations') }}" class="btn btn-danger btn-icon-text">
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
