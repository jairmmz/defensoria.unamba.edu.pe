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
                    <div class="row">
                        <div class="col-lg-7">
                            <form method="get" action="#">
                                <div class="form-group">
                                    <label for="title">Cargo de la autoridad</label>
                                    <input id="title" class="form-control" name="title" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="title">Nombre y apellidos</label>
                                    <input id="title" class="form-control" name="title" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="username">Foto</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <input type="file" class="dropify" name="image" />
                                        </div>
                                    </div>
                                </div>
                                <input class="btn btn-primary" type="submit" value="Guardar">
                            </form>
                        </div>
                        <div class="col-lg-5">
                            Hola mundo
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
