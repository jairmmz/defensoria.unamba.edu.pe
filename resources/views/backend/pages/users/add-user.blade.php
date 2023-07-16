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
                    <form method="POST" action="{{ route('users.save') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{ method_field("POST") }}
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="username">Nombre de usuario</label>
                                    <input id="username" class="form-control" name="username" type="text" value="{{ old('username') }}">
                                    @error('username') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Correo electrónico</label>
                                    <input id="email" class="form-control" name="email" type="email" value="{{ old('email') }}">
                                    @error('email') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="role">Rol</label>
                                    <select class="form-control" name="role">
                                        <option value="superadmin">Super admin</option>
                                        <option value="admin">admin</option>
                                    </select>
                                    @error('role') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
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
                                    @error('confir_password') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Imagen (PNG, JPG, IMG)</label>
                            <div class="card">
                                <div class="card-body">
                                    <input type="file" class="dropify" name="profile_photo">
                                    @error('profile_photo') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
