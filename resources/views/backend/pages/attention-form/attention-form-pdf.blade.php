<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SOLICITUD-{{ $identityPlaintiff }}</title>

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

        .text-bold{
            font-weight: bold;
        }
    </style>

</head>

<body>

    @php
    use Carbon\Carbon;
    @endphp

    <div class="information">
        <table width="100%">
            <tr>
                <td align="left" style="width: 20%;">
                    <pre>
    <img src="{{ public_path() . $imageUNAMBA }}" width="40%">
    </pre>
                </td>
                <td align="center" style="width: 80%;">
                    <h3 class="">UNIVERSIDAD NACIONAL MICAELA BASTIDAS DE APURÍMAC</h3>
                    <span>Formando líderes postmodernos</span>
                    <h5>DEFENSORÍA UNIVERSITARIA</h5>
                    <hr>
                    <span>"Año de la unidad, la paz y el desarrollo"</span>
                    <h4 class="format-request">FORMATO DE SOLICITUD</h4>
                    <div align="left">
                        <b>Sr. (a): {{ $authoritie->name }}</b><br>
                    </div>
                    <b
                        class="b-autorithie">.............................................................................................</b><br>
                    <b>Defensor Universitario - UNAMBA</b>
                </td>
                <td align="right" style="width: 20%;">
                    <pre>
    <img src="{{ public_path() . $imageTH }} " width="40%" style="margin-right: 5px">
                </pre>
                </td>
            </tr>

        </table>
    </div>

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
                    @if(isset($attentionForm_profesional_faculty_plaintiff))
                        <td colspan="10">{{ $attentionForm_profesional_faculty_plaintiff }}</td>
                    @else
                        <td colspan="10"></td>
                    @endif
                </tr>
                <tr>
                    <td colspan="2" class="text-bold">Escuela Profesional:</td>
                    @if(isset($attentionForm_profesional_school_plaintiff))
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
                        <td  colspan="10">Estudiante</td>
                    @elseif ($attentionForm->charge_defendant == 2)
                        <td  colspan="10">Docente</td>
                    @elseif ($attentionForm->charge_defendant == 3)  
                        <td  colspan="10">Administrativo</td>
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
                    <td colspan="11" class="text-bold">Copias de dicumentos adjuntos</td>
                </tr>
                <tr>
                    <td colspan="11">{{ $attentionForm->description_files }} <br> </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="information" style="position: absolute; bottom: 0;">
        <table width="100%">
            <tr>
                <td align="left" style="width: 50%;">
                    FORMATO DE SOLICITUD ELECTRÓNICO- DEFENSORÍA UNIVERSITARIA.
                </td>
            </tr>

        </table>
    </div>
</body>

</html>
