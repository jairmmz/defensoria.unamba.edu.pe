@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Editar usuario
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('users') }}">Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('users.update', ['user' => $user->id]) }}" enctype="multipart/form-data" autocomplete="off" method="POST">
                        @csrf
                        {{ method_field("PATCH") }}
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="username">Nombre de usuario</label>
                                    <input id="username" class="form-control" name="username" type="text" value="{{ $user->username }}">
                                    @error('username') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Correo electrónico</label>
                                    <input id="email" class="form-control" name="email" type="email" value="{{ $user->email }}">
                                    @error('email') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="role">Rol</label>
                                    <select class="form-control" name="role">
                                        <option value="superadmin" {{ $user->role == 'superadmin' ? 'selected' : '' }} >Super admin</option>
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }} >admin</option>
                                    </select>
                                    @error('role') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="username">Nueva imagen (PNG, JPG, IMG)</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <input type="file" class="dropify" name="profile_photo">
                                            @error('profile_photo') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                @if (!$user->profile_photo)
                                <p>Foto de perfil por defecto</p>
                                <img style="width: 150px" src="{{ asset('assets/images/users/user-default.png') }}" alt="">
                                @else
                                <p>Foto de perfil actual</p>
                                <img style="width: 150px" src="{{ asset('assets/images/' . $user->profile_photo) }}" alt="">
                                @endif
                            </div>
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">Guardar</button> --}}
                        <div class="d-flex justify-content-between mb-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <div>
                                <a href="{{ route('users') }}" class="btn btn-danger btn-icon-text">
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
