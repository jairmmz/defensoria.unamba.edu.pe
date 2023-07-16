@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Usuarios
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <h4 class="card-title">LISTA DE USUARIOS</h4>
                <div>
                    <a href="{{ route('users.add') }}" class="btn btn-primary btn-icon-text">
                        Añadir usuario
                        <i class="btn-icon-append fas fa-plus"></i>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Orden #</th>
                                    <th>Usuario</th>
                                    <th>Email</th>
                                    <th>Foto</th>
                                    <th>Rol</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if (!$user->profile_photo)
                                                <img src="{{ asset('assets/images/users/user-default.png') }}" alt="">
                                            @else
                                            <img src="{{ asset('assets/images/' . $user->profile_photo) }}" alt="">
                                            @endif
                                        </td>
                                        <td>
                                            {{ $user->role }}
                                        </td>
                                        <td>
                                            <a href="{{ route('users.edit', ['user' => $user->id ]) }}" class="btn btn-outline-primary mb-2">Editar</a>
                                            <form method="POST" action="{{ route('users.destroy', ['user' => $user->id ]) }}" >
                                                @csrf
                                                {{ method_field("DELETE") }}
                                                <a href="{{ route('users.destroy', ['user' => $user->id ]) }}" class="btn btn-outline-danger" onclick="event.preventDefault(); this.closest('form').submit();">Eliminar</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
