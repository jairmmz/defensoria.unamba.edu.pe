@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Añadir usuario
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('users') }}">Usuarios</a></li>
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
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="username">Nombre de usuario</label>
                                        <input id="username" class="form-control" name="username" type="text">
                                        @error('username') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="email">Correo electrónico</label>
                                        <input id="email" class="form-control" name="email" type="email">
                                        @error('email') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Contraseña</label>
                                        <input id="password" class="form-control" name="password" type="password">
                                        @error('password') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Confimar contraseña</label>
                                        <input id="password" class="form-control" name="confir_password" type="password">
                                        @error('password') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Imagen</label>
                                <div class="card">
                                    <div class="card-body">
                                        <input type="file" class="dropify" name="profile_photo" />
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary"  value="Guardar">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
