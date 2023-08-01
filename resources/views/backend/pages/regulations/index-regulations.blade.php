@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Lisda de documentos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('regulations') }}">Documentos</a></li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <h4 class="card-title">LISTA DE DOCUMENTOS</h4>
                <div>
                    <a href="{{ route('regulations.add') }}" class="btn btn-primary btn-icon-text">
                        Añadir documento
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
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Fecha de resolución</th>
                                    <th>Documento</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regulations as $regulation)
                                    <tr>
                                        <td>{{ $regulation->id }} </td>
                                        <td>{{ Str::limit($regulation->title, 30) }}</td>
                                        <td>{{ Str::limit($regulation->description, 40) }}</td>
                                        <td>{{ $regulation->date_regulation }}</td>
                                        <td>
                                            <a href="{{ asset('assets/documents/' . $regulation->document_regulation) }}"
                                                target="_blank" class="btn btn-outline-primary">Ver</a>
                                        </td>
                                        <td>
                                            <label
                                                class="badge badge-{{ $regulation->is_active == 1 ? 'info' : 'danger' }}">
                                                {{ $regulation->is_active == 1 ? 'Activo' : 'Inactivo' }}
                                            </label>
                                        </td>
                                        <td>
                                            <a href="{{ route('regulations.edit', ['regulation' => $regulation->id]) }}"
                                                class="btn btn-outline-primary mb-2">Editar</a>
                                            <form method="POST"
                                                action="{{ route('regulations.destroy', ['regulation' => $regulation->id]) }}">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="button" class="btn btn-outline-danger"
                                                    onclick="confirmation(event)">Eliminar</button>
                                            </form>
                                        </td>
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
