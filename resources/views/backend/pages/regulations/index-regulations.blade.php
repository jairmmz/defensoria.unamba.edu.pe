@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Reglamentos y Resoluciones
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data table</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <h4 class="card-title">LISTA DE REGLAMENTOS</h4>
                <div>
                  <a href="{{ route('regulations.add') }}" class="btn btn-primary btn-icon-text">
                    Añadir reglamento
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
                                    <td>{{ $regulation->title }}</td>
                                    <td>{{ $regulation->description }}</td>
                                    <td>{{ $regulation->date_regulation }}</td>
                                    <td>
                                        <a href="{{ asset('assets/documents/' . $regulation->document_regulation) }}" target="_blank" class="btn btn-outline-primary">Ver</a>
                                    </td>
                                    <td>
                                        <label class="badge badge-{{ $regulation->is_active == 1 ? 'info' : 'danger'  }}">
                                            {{ $regulation->is_active == 1 ? 'Activo' : 'Inactivo' }}
                                        </label>
                                    </td>
                                    <td>
                                        <a href="{{ route('regulations.edit', ['regulation' => $regulation->id ]) }}" class="btn btn-outline-primary mb-2">Editar</a>
                                        <form method="POST" action="{{ route('regulations.destroy', ['regulation' => $regulation->id ]) }}" >
                                            @csrf
                                            {{ method_field("DELETE") }}
                                            <a href="{{ route('regulations.destroy', ['regulation' => $regulation->id ]) }}" class="btn btn-outline-danger" onclick="event.preventDefault(); this.closest('form').submit();">Eliminar</a>
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
@endsection
