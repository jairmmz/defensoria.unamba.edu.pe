@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Noticias
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
                <h4 class="card-title">LISTA DE NOTICIAS</h4>                
                  <a href="{{ route('surveys.add') }}" class="btn btn-primary btn-icon-text">
                    Añadir noticia
                    <i class="btn-icon-append fas fa-plus"></i>
                  </a>
            </div>
              
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>URL</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($surveys as $survey)
                                    <tr>
                                        <td>{{ $survey->id }}</td>
                                        <td>{{ $survey->name }}</td>
                                        <td>{{ Str::limit($survey->description, 50) }}</td>
                                        <td><a href="{{ $survey->url }}" target="_blank">Ir a la encuesta</a></td>
                                        <td>
                                            <label class="badge badge-{{ $survey->is_active == 1 ? 'info' : 'danger'  }}">
                                                {{ $survey->is_active == 1 ? 'Activo' : 'Inactivo' }}
                                            </label>
                                        </td>
                                        <td>
                                            <a href="{{ route('surveys.edit', ['survey' => $survey->id ]) }}" class="btn btn-outline-primary mb-2">Editar</a>
                                            <form method="POST" action="{{ route('surveys.destroy', ['survey' => $survey->id ]) }}" >
                                                @csrf
                                                {{ method_field("DELETE") }}
                                                <a href="{{ route('surveys.destroy', ['survey' => $survey->id ]) }}" class="btn btn-outline-danger" onclick="event.preventDefault(); this.closest('form').submit();">Eliminar</a>
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
