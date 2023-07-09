@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Añadir principio
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('beginnings') }}">Principios</a></li>
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
                            <input class="btn btn-primary" type="submit" value="Añadir">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
