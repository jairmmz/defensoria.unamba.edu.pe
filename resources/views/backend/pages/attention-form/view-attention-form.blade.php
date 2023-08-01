@extends('backend.layouts.app')
@section('content')
<style type="text/css">
    @page {
        size: 21cm 29.7cm;
        margin: 0;
    }

    body {
        margin: 0px;
    }

    * {
        font-family: Verdana, Arial, sans-serif;
    }

    a {
        color: #fff;
        text-decoration: none;
    }

    table {
        font-size: x-small;
    }

    .table-document {
        border-collapse: collapse;
        width: 95%;
        table-layout: fixed;
    }

    .table-document th,
    .table-document td {
        border: 1px solid black;
        padding: 4px 0 4px 4px;
        text-align: left;
    }


    tfoot tr td {
        font-weight: bold;
        font-size: x-small;
    }

    .invoice {
        margin-top: -25px;
    }

    .invoice table {
        margin: 15px;
    }

    .invoice h3 {
        margin-left: 15px;
    }

    .information {
        color: #000;
    }

    .information .logo {
        margin: 5px;
    }

    .information table {
        padding: 10px;
    }

    h3 {
        margin-bottom: -4px;
    }

    h5 {
        margin-top: -1px;
        margin-bottom: -4px;
    }

    .format-request {
        margin-top: -3px;
        margin-bottom: 15px;
    }

    .b-autorithie {
        margin-top: -4px;
    }

    .text-bold {
        font-weight: bold;
    }
    .text-blue{
        color: #00f;
    }
</style>

@php
    use Carbon\Carbon;
@endphp

<div class="page-header">
    <h3 class="page-title">
        Atención de casos
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('attention-form-index') }}">Atención de casos</a></li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-2">
                <label>Actualizar el estado de la solicitud:</label>
            </div>
            <div class="col-lg-4">
                <form id="formAttentionForm" action="{{ route('attention-form.update', ['attentionForm' => $attentionForm->id]) }}" method="POST">
                    @csrf
                    {{ method_field("PATCH") }}
                    <div class="form-group ">
                        {{-- <label for="status">Actualizar el estado de la solicitud</label> --}}
                        <select class="form-control" name="status" id="status" onchange="this.form.submit()">
                            <option value="1" {{ $attentionForm->status == '1' ? 'selected' : '' }}>Pendiente</option>
                            <option value="2" {{ $attentionForm->status == '2' ? 'selected' : '' }}>Proceso</option>
                            <option value="3" {{ $attentionForm->status == '3' ? 'selected' : '' }}>Archivado</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <a href="{{ route('attention-form.generatePDF', ['attentionForm' => $attentionForm->id ]) }}" target="_blank" class="btn btn-outline-danger">Generar PDF   <i class="fas fa-file-pdf"></i></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="invoice">
            <table class="table-document" width="100%">
                <tbody>
                    <tr>
                        <td colspan="1" class="text-bold">Fecha:</td>
                        <td colspan="10">{{ Carbon::parse($attentionForm->created_at)->format('d/m/y H:i') }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-bold">Nombres y Apellidos del demandante:</td>
                        <td colspan="7">{{ $attentionForm->name_plaintiff }}</td>
                    </tr>
                    <tr>
                        <td class="text-bold">DNI:</td>
                        <td>{{ $attentionForm->identity_dni_plaintiff }}</td>
                        <td class="text-bold">Código:</td>
                        <td>{{ $attentionForm->identity_code_plaintiff }}</td>

                        {{-- Condición para saber si es estudiante docente o administrativo --}}
                        @if ($attentionForm->condition_plaintiff == 1)
                            <td class="text-bold">Estudiante:</td>
                            <td> X </td>
                            <td class="text-bold">Docente:</td>
                            <td></td>
                            <td colspan="2" class="text-bold">Administrativo:</td>
                            <td></td>
                        @elseif ($attentionForm->condition_plaintiff == 2)
                            <td class="text-bold">Estudiante:</td>
                            <td></td>
                            <td class="text-bold">Docente:</td>
                            <td> X </td>
                            <td colspan="2" class="text-bold">Administrativo:</td>
                            <td></td>
                        @elseif ($attentionForm->condition_plaintiff == 3)
                            <td class="text-bold">Estudiante:</td>
                            <td></td>
                            <td class="text-bold">Docente:</td>
                            <td></td>
                            <td colspan="2" class="text-bold">Administrativo:</td>
                            <td> X </td>
                        @endif
                    </tr>
                    <tr>
                        <td colspan="1" class="text-bold">Facultad:</td>
                        @if (isset($attentionForm_profesional_faculty_plaintiff))
                            <td colspan="10">{{ $attentionForm_profesional_faculty_plaintiff }}</td>
                        @else
                            <td colspan="10"></td>
                        @endif
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold">Escuela Profesional:</td>
                        @if (isset($attentionForm_profesional_school_plaintiff))
                            <td colspan="9">{{ $attentionForm_profesional_school_plaintiff }}</td>
                        @else
                            <td colspan="9"></td>
                        @endif
                    </tr>
                    <tr>
                        <td colspan="3" class="text-bold">Centro de trabajo / oficina</td>
                        <td colspan="8">{{ $attentionForm->workplace_office_plaintiff }}</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="text-bold">Domicilio:</td>
                        <td colspan="10">{{ $attentionForm->home_address_plaintiff }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-bold">Número de teléfono / celular:</td>
                        <td colspan="8">{{ $attentionForm->number_phone_plaintiff }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold">Correo electrónico:</td>
                        <td colspan="9">{{ $attentionForm->email_plaintiff }}</td>
                    </tr>
                    <tr>
                        <td colspan="11" class="text-bold">Quejado o denunciado (Identificación plena):</td>
                        {{-- <td colspan="7"></td> --}}
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold">Nombres y Apellidos:</td>
                        <td colspan="9">{{ $attentionForm->name_defendant }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold">Escuela Profesional:</td>
                        <td colspan="9"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-bold">Centro de trabajo / oficina</td>
                        <td colspan="8"></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="text-bold">Cargo:</td>
                        @if ($attentionForm->charge_defendant == 1)
                            <td colspan="10">Estudiante</td>
                        @elseif ($attentionForm->charge_defendant == 2)
                            <td colspan="10">Docente</td>
                        @elseif ($attentionForm->charge_defendant == 3)
                            <td colspan="10">Administrativo</td>
                        @else
                            <td colspan="10"></td>
                        @endif
                    </tr>
                    <tr>
                        <td colspan="3" class="text-bold">Número de teléfono / celular:</td>
                        <td colspan="8">{{ $attentionForm->number_phone_defendant }}</td>
                    </tr>
                    <tr>
                        <td colspan="11" class="text-bold">Descripción de los hechos:</td>
                    </tr>
                    <tr>
                        <td colspan="11">{{ $attentionForm->description_facts }} <br></td>
                    </tr>
                    <tr>
                        <td colspan="11" class="text-bold">Derechos que estime afectados:</td>
                    </tr>
                    <tr>
                        <td colspan="11">{{ $attentionForm->violated_rights }} <br></td>
                    </tr>
                    <tr>
                        <td colspan="11" class="text-bold">Copias de documentos adjuntos</td>
                    </tr>
                    <tr>
                        <td colspan="11">{{ $attentionForm->description_files }} <br> </td>
                    </tr>
                    <tr>
                        <td colspan="11" class="text-bold">Enlace de los documentos adjuntos</td>
                    </tr>
                    <tr>
                        <td colspan="11">
                            @if (isset($filesPlaintiff))
                                @foreach ($filesPlaintiff as $files)
                                    <a class="text-blue" href="{{ asset('assets/attention-form/' . $files->file_attention_form) }}" target="_blank">{{ $files->file_attention_form }}</a><br>
                                @endforeach
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row mt-4 mb-4 ml-4">
        <div class="col-lg-3">
            <a href="{{ route('attention-form-index') }}"  class="btn btn-outline-primary">Atrás</a>
        </div>
    </div>
</div>

@endsection