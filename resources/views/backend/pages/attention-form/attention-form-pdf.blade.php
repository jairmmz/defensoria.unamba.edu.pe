<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SOLICITUD-{{ $identityPlaintiff }}</title>

    <style type="text/css">
        @page {
            size: 21cm 29.7cm;
            margin: 20px;
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

        .text-semi-bold{
            /* Texto normal */
            font-weight: normal
        }

        .max-width{
            max-width: 105;
            max-height: 105px;
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
                    <span>"{{ $setting->title_website }}"</span>
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
                    <td colspan="11">{{ Carbon::parse($attentionForm->created_at)->format('d/m/y H:i') }}</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Nombres y Apellidos del demandante: <span class="text-semi-bold">{{ $attentionForm->name_plaintiff }}</span></td>
                </tr>
                <tr>
                    <td class="text-bold">DNI:</td>
                    <td>{{ $attentionForm->identity_dni_plaintiff }}</td>
                    <td class="text-bold">Código:</td>
                    <td>{{ $attentionForm->identity_code_plaintiff }}</td>

                    {{-- Condición para saber si es estudiante docente o administrativo --}}
                    @if ($attentionForm->condition_plaintiff == 1)
                        <td colspan="2" class="text-bold">Estudiante:</td>
                        <td> X </td>
                        <td class="text-bold">Docente:</td>
                        <td></td>
                        <td colspan="2" class="text-bold">Administrativo:</td>
                        <td></td>
                    @elseif ($attentionForm->condition_plaintiff == 2)
                        <td colspan="2" class="text-bold">Estudiante:</td>
                        <td></td>
                        <td class="text-bold">Docente:</td>
                        <td> X </td>
                        <td colspan="2" class="text-bold">Administrativo:</td>
                        <td></td>
                    @elseif ($attentionForm->condition_plaintiff == 3)  
                        <td colspan="2" class="text-bold">Estudiante:</td>
                        <td></td>
                        <td class="text-bold">Docente:</td>
                        <td></td>
                        <td colspan="2" class="text-bold">Administrativo:</td>
                        <td> X </td>
                    @endif
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Asunto: <span class="text-semi-bold">{{ $attentionForm->issue }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Escuela Profesional: <span class="text-semi-bold">{{ $attentionForm->profesional_school_plaintiff }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Centro de trabajo / oficina: <span class="text-semi-bold">{{ $attentionForm->workplace_office_plaintiff }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Domicilio: <span class="text-semi-bold">{{ $attentionForm->home_address_plaintiff }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Número de teléfono / celular: <span class="text-semi-bold">{{ $attentionForm->number_phone_plaintiff }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Correo electrónico: <span class="text-semi-bold">{{ $attentionForm->email_plaintiff }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Quejado o denunciado (Identificación plena):</td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Nombres y Apellidos: <span class="text-semi-bold">{{ $attentionForm->name_defendant }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Escuela Profesional: <span class="text-semi-bold">{{ $attentionForm->profesional_school_defendant }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Centro de trabajo / oficina <span class="text-semi-bold">{{ $attentionForm->workplace_office_defendant }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Cargo: <span class="text-semi-bold">
                        @if ($attentionForm->charge_defendant == 1)
                            Estudiante
                        @elseif ($attentionForm->charge_defendant == 2)
                            Docente
                        @elseif ($attentionForm->charge_defendant == 3)  
                            Administrativo
                        @endif
                </span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Número de teléfono / celular: <span class="text-semi-bold">{{ $attentionForm->number_phone_defendant }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Descripción de los hechos: <span class="text-semi-bold">{{ $attentionForm->description_facts }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Derechos que estime afectados: <span class="text-semi-bold">{{ $attentionForm->violated_rights }}</span></td>
                </tr>
                <tr>
                    <td colspan="12" class="text-bold">Copias de dicumentos adjuntos <span class="text-semi-bold">{{ $attentionForm->description_files }}</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="information mt-4">
        <table width="100%">
            <tr>
                <td align="left" style="width: 20%;">
                </td>
                <td align="center" style="width: 80%;">
                    <div class="container">
                        <img class="max-width" src="{{ $signature_plaintiff }}">
                    </div>
                    <b class="b-autorithie">...............................................................................</b><br>
                    <div align="center">
                        <b>Sr. (a): {{ $attentionForm->name_plaintiff }}</b><br>
                    </div>
                </td>
                <td align="right" style="width: 20%;">
                </td>
            </tr>

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
