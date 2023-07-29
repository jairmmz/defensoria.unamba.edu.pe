@extends('backend.layouts.app')
@section('content')
    @php
    use Carbon\Carbon;
    @endphp
    <div class="page-header">
        <h3 class="page-title">
            Lista de Quejas y Denuncias
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
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Orden #</th>
                                    <th>Solicitante</th>
                                    <th>Cargo</th>
                                    <th>Tipo de Solicitud</th>
                                    <th>Quejado/Denunciado</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attentionForms as $attentionForm)
                                <tr>
                                    <td>{{ $attentionForm->id }}</td>
                                    <td>{{ $attentionForm->name_plaintiff }}</td>
                                    <td>{{ $attentionForm->condition_plaintiff == 1 ? 'Estudiante' : ($attentionForm->condition_plaintiff == 2 ? 'Docente' : 'Administrativo') }}
                                    </td>
                                    <td>{{ $attentionForm->type_request == 1 ? 'Reclamo' : ($attentionForm->type_request == 2 ? 'Queja' : 'Denuncia') }}</td>
                                    <td>{{ $attentionForm->name_defendant }}</td>
                                    <td>{{ Carbon::parse($attentionForm->created_at)->format('d/m/y H:i') }}</td>
                                    <td>
                                        <form id="formAttentionForm" action="{{ route('attention-form.update', ['attentionForm' => $attentionForm->id]) }}" method="POST">
                                            @csrf
                                            {{ method_field("PATCH") }}
                                            <div class="form-group ">
                                                <select class="form-control" name="status" id="status" onchange="this.form.submit()">
                                                    <option value="1" {{ $attentionForm->status == '1' ? 'selected' : '' }}>Pendiente</option>
                                                    <option value="2" {{ $attentionForm->status == '2' ? 'selected' : '' }}>Proceso</option>
                                                    <option value="3" {{ $attentionForm->status == '3' ? 'selected' : '' }}>Archivado</option>
                                                </select>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('attention-form.show', ['attentionForm' => $attentionForm->id ]) }}" class="btn btn-outline-primary">Ver</a>
                                        <a href="{{ route('attention-form.generatePDF', ['attentionForm' => $attentionForm->id ]) }}" target="_blank" class="btn btn-outline-danger">PDF</a>
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
