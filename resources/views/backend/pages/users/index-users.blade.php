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

            @php
                $index = 1;
            @endphp

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
                                        <td>{{ $index++ }}</td>
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
                                                {{ method_field('DELETE') }}
                                                <button type="button" class="btn btn-outline-danger"
                                                    onclick="confirmation(event)">Eliminar</button>
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
    <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();

            var form = ev.currentTarget.parentElement;
            var urlToRedirect = form.getAttribute('action');

            swal({
                title: "¿Estás seguro?",
                text: "El registro se eliminará definitivamente!",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "Cancelar",
                        value: null,
                        visible: true,
                        className: "",
                        closeModal: true,
                    },
                    confirm: {
                        text: "Eliminar",
                        value: true,
                        visible: true,
                        className: "btn-danger", // Cambia el color del botón de eliminar
                        closeModal: true,
                    },
                },
            }).then((willCancel) => {
                if (willCancel) {
                    form.submit(); // Envía el formulario manualmente después de la confirmación
                }
            });
        }
    </script>

    @if (Session::has('message'))
        <script>
            swal("Mensaje", "{{ Session::get('message') }}", "success", {
                button: true,
                button: "Aceptar",
                timer: 3000,
            });
        </script>
    @endif
@endsection
