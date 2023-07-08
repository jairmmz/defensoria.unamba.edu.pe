@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Datos de la autoridad
        </h3>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">FORMULARIO DE REGISTRO</h4>
                    <form class="cmxform" id="signupForm" method="get" action="#">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="title">Cargo de la autoridad</label>
                                        <input id="title" class="form-control" name="title" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="title">Nombre y apellidos</label>
                                        <input id="title" class="form-control" name="title" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Foto</label>
                                <div class="card">
                                    <div class="card-body">
                                        <input type="file" class="dropify" name="image" />
                                    </div>
                                </div>
                            </div>

                            <input class="btn btn-primary" type="submit" value="Actualizar">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
