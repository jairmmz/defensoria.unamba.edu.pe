@extends('frontend.layouts.app')
@section('content')
    <style>
        .attention-form .form-group input, .attention-form .form-group .select-bar {
            background: #fff;
        }

        .attention-form .form-group input[type="submit"] {
            background: #5350ff;
            color: #ffffff;
        }

        .account-area{
            background: #f5f5f5;
            border: 4px solid #dee2e6; 
            border-radius: 5px;
            padding: 10px;
        }

        select[readonly] option, select[readonly] optgroup {
            display: none;
        }
    </style>

    <!--=================Account Section================= -->
    <section class="bg-f8 account-section padding-top padding-bottom bg_img bg_xxl_contain bg_right_bottom">
        <div class="container">
            <h3 class="account-title mb-4 text-center">Formulario de Quejas y Denuncias</h3>
            <p class="text-justify">
                Por favor, completa todos los campos obligatorios y proporciona la información necesaria para que podamos atender tu solicitud de manera adecuada. Valoramos tus comentarios y contribuciones para mantener un ambiente seguro y respetuoso para todos los miembros de nuestra comunidad.
            </p>
            <div class="account-area">
                <form class="attention-form" method="POST" action="{{ route('attention-form.save') }}" enctype="multipart/form-data" autocomplete="off">
                    {{ csrf_field() }}
                    @method('POST')
                    <h3 class="account-title mb-4">Datos del solicitante</h3>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input name="name_plaintiff" type="text" value="{{ old('name_plaintiff') }}" placeholder="Nombres y apellidos">
                                @error('name_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <input name="identity_code_plaintiff" type="number" value="{{ old('identity_code_plaintiff') }}" placeholder="Código">
                                @error('identity_code_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <input name="identity_dni_plaintiff" type="number" value="{{ old('identity_dni_plaintiff') }}" placeholder="DNI">
                                @error('identity_dni_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <select name="condition_plaintiff" id="condition_plaintiff">
                                    <option selected disabled>Selección la ocupación</option>
                                    <option value="1" @if(old('condition_plaintiff') == '1') selected @endif>Estudiante</option>
                                    <option value="2" @if(old('condition_plaintiff') == '2') selected @endif>Docente</option>
                                    <option value="3" @if(old('condition_plaintiff') == '3') selected @endif>Administrativo</option>
                                </select>
                                @error('condition_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <select name="type_request">
                                    <option selected="true" disabled="disabled">Seleccione el tipo de solicitud</option>
                                    <option value="1" @if(old('type_request') == '1') selected @endif>Queja</option>
                                    <option value="2" @if(old('type_request') == '2') selected @endif>Reclamo</option>
                                    <option value="3" @if(old('type_request') == '3') selected @endif>Denuncia</option>
                                </select>
                                @error('type_request') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input name="issue" type="text" value="{{ old('issue') }}" placeholder="Asunto">
                                @error('issue') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select name="profesional_school_plaintiff" {{ old('profesional_school_plaintiff') == null ? 'readonly' : '' }} id="profesional_school_plaintiff">
                                    <option selected="true" disabled="disabled">Seleccione la escuela profesional</option>
                                    <option value="Administración" @if(old('profesional_school_plaintiff') == 'Administración') selected @endif>Administración</option>
                                    <option value="Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia" @if(old('profesional_school_plaintiff') == 'Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia') selected @endif>Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia</option>
                                    <option value="Ciencia Política y Gobernabilidad" @if(old('profesional_school_plaintiff') == 'Ciencia Política y Gobernabilidad') selected @endif>Ciencia Política y Gobernabilidad</option>
                                    <option value="Ingeniería Agroindustrial" @if(old('profesional_school_plaintiff') == 'Ingeniería Agroindustrial') selected @endif>Ingeniería Agroindustrial</option>
                                    <option value="Ingeniería de Minas" @if(old('profesional_school_plaintiff') == 'Ingeniería de Minas') selected @endif>Ingeniería de Minas</option>
                                    <option value="Ingeniería Informática y Sistemas" @if(old('profesional_school_plaintiff') == 'Ingeniería Informática y Sistemas') selected @endif>Ingeniería Informática y Sistemas</option>
                                    <option value="Ingeniería Civil" @if(old('profesional_school_plaintiff') == 'Ingeniería Civil') selected @endif>Ingeniería Civil</option>
                                    <option value="Ingeniería Agroecológica y Desarrollo Rural" @if(old('profesional_school_plaintiff') == 'Ingeniería Agroecológica y Desarrollo Rural') selected @endif>Ingeniería Agroecológica y Desarrollo Rural</option>
                                    <option value="Medicina Veterinaria y Zootécnia" @if(old('profesional_school_plaintiff') == 'Medicina Veterinaria y Zootécnia') selected @endif>Medicina Veterinaria y Zootécnia</option>
                                </select>
                                @error('profesional_school_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="workplace_office_plaintiff" type="text" value="{{ old('workplace_office_plaintiff') }}" {{ old('workplace_office_plaintiff') == null ? 'readonly' : '' }} id="workplace_office_plaintiff" placeholder="Centro de trabajo/Oficina">
                                @error('workplace_office_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="home_address_plaintiff" type="text" value="{{ old('home_address_plaintiff') }}" placeholder="Dirección (Av., Jr. Urb.)">
                                @error('home_address_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <input name="number_phone_plaintiff" type="number" value="{{ old('number_phone_plaintiff') }}" placeholder="Celular/teléfono">
                                @error('number_phone_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input name="email_plaintiff" type="email" value="{{ old('email_plaintiff') }}" placeholder="Correo electrónico">
                                @error('email_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="account-title mb-4">Datos del quejado / denunciado</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name_defendant" type="text" value="{{ old('name_defendant') }}" placeholder="Nombres y apellidos">
                                @error('name_defendant') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <select name="charge_defendant" id="charge_defendant">
                                    <option selected disabled>Seleccione la ocupación</option>
                                    <option value="1" @if(old('charge_defendant') == '1') selected @endif>Estudiante</option>
                                    <option value="2" @if(old('charge_defendant') == '2') selected @endif>Docente</option>
                                    <option value="3" @if(old('charge_defendant') == '3') selected @endif>Administrativo</option>
                                </select>
                                @error('charge_defendant') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <input name="number_phone_defendant" type="number" value="{{ old('number_phone_defendant') }}" placeholder="Celular/teléfono">
                                @error('number_phone_defendant') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select name="profesional_school_defendant" {{ old('profesional_school_defendant') == null ? 'readonly' : '' }} id="profesional_school_defendant">
                                    <option selected="true" disabled="disabled">Seleccione la escuela profesional</option>
                                    <option value="Administración" @if(old('profesional_school_defendant') == 'Administración') selected @endif>Administración</option>
                                    <option value="Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia" @if(old('profesional_school_defendant') == 'Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia') selected @endif>Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia</option>
                                    <option value="Ciencia Política y Gobernabilidad" @if(old('profesional_school_defendant') == 'Ciencia Política y Gobernabilidad') selected @endif>Ciencia Política y Gobernabilidad</option>
                                    <option value="Ingeniería Agroindustrial" @if(old('profesional_school_defendant') == 'Ingeniería Agroindustrial') selected @endif>Ingeniería Agroindustrial</option>
                                    <option value="Ingeniería de Minas" @if(old('profesional_school_defendant') == 'Ingeniería de Minas') selected @endif>Ingeniería de Minas</option>
                                    <option value="Ingeniería Informática y Sistemas" @if(old('profesional_school_defendant') == 'Ingeniería Informática y Sistemas') selected @endif>Ingeniería Informática y Sistemas</option>
                                    <option value="Ingeniería Civil" @if(old('profesional_school_defendant') == 'Ingeniería Civil') selected @endif>Ingeniería Civil</option>
                                    <option value="Ingeniería Agroecológica y Desarrollo Rural" @if(old('profesional_school_defendant') == 'Ingeniería Agroecológica y Desarrollo Rural') selected @endif>Ingeniería Agroecológica y Desarrollo Rural</option>
                                    <option value="Medicina Veterinaria y Zootécnia" @if(old('profesional_school_defendant') == 'Medicina Veterinaria y Zootécnia') selected @endif>Medicina Veterinaria y Zootécnia</option>
                                </select>
                                @error('profesional_school_defendant') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="workplace_office_defendant" type="text" value="{{ old('workplace_office_defendant') }}" {{ old('workplace_office_defendant') == null ? 'readonly' : '' }} id="workplace_office_defendant" placeholder="Centro de trabajo/Oficina">
                                @error('workplace_office_defendant') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="number_phone_defendant">Descripción de los hechos: <span>(Fundamente de forma clara y precisa los hechos ocurridos)</span></label>
                                <textarea name="description_facts" cols="30" rows="10">{{ old('description_facts') }}</textarea>
                                @error('description_facts') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input name="violated_rights" type="text" value="{{ old('violated_rights') }}" placeholder="Derechos que estime vulnerados">
                                @error('violated_rights') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input name="description_files" type="text" value="{{ old('description_files') }}" placeholder="Descripción de los documentos adjuntos">
                                @error('description_files') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="none">
                        <input type="hidden" name="status" value="pendiente">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="file_attention_form">Documentos adjuntos (máximo 10mb)</label>
                                <input type="file" name="file_attention_form[]" multiple>
                                @error('file_attention_form') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="signature_plaintiff">Firma digital (firma escaneada en formato imagen)</label>
                                <input type="file" name="signature_plaintiff">
                                @error('signature_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group w-100 mt-4">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('condition_plaintiff').addEventListener('change', function() {
            const selectedOption = this.value;
            const escuelaProfesionalField = document.getElementById('profesional_school_plaintiff');
            const workplaceOfficeField = document.getElementById('workplace_office_plaintiff');
            

            // Ocultar ambos campos por defecto
            escuelaProfesionalField.style.disabled = true;
            workplaceOfficeField.style.disabled = true;

            // Habilitar el campo apropiado según la opción seleccionada
            if (selectedOption === '1') {
                // Estudiante seleccionado
                escuelaProfesionalField.setAttribute('required', 'required');
                escuelaProfesionalField.removeAttribute('readonly');
                escuelaProfesionalField.style.backgroundColor = '';

                workplaceOfficeField.setAttribute('readonly', 'readonly');
                workplaceOfficeField.removeAttribute('required');
                workplaceOfficeField.style.backgroundColor = '#f5f5f5';
                workplaceOfficeField.value = '';
            } else if (selectedOption === '2' || selectedOption === '3') {
                // Administrativo o docente seleccionado
                workplaceOfficeField.removeAttribute('readonly');
                workplaceOfficeField.style.backgroundColor = '';
                workplaceOfficeField.setAttribute('required', 'required');

                escuelaProfesionalField.setAttribute('readonly', 'readonly');
                escuelaProfesionalField.removeAttribute('required');
                escuelaProfesionalField.style.backgroundColor = '#f5f5f5';
                escuelaProfesionalField.selectedIndex = 0;
            }
        });

        document.getElementById('charge_defendant').addEventListener('change', function() {
            const selectedOption = this.value;
            const profesional_school_defendantField = document.getElementById('profesional_school_defendant');
            const workplace_office_defendantField = document.getElementById('workplace_office_defendant');

            // Deshabilitar ambos campos por defecto
            profesional_school_defendantField.style.disabled = true;
            workplace_office_defendantField.style.disabled = true;

            // Habilitar el campo apropiado según la opción seleccionada
            if (selectedOption === '1') {
                // Estudiante seleccionado
                profesional_school_defendantField.setAttribute('required', 'required');
                profesional_school_defendantField.removeAttribute('readonly');
                profesional_school_defendantField.style.backgroundColor = '';

                workplace_office_defendantField.setAttribute('readonly', 'readonly');
                workplace_office_defendantField.removeAttribute('required');
                workplace_office_defendantField.style.backgroundColor = '#f5f5f5';
                workplace_office_defendantField.value = '';
            } else if (selectedOption === '2' || selectedOption === '3') {
                // Administrativo o docente seleccionado
                workplace_office_defendantField.removeAttribute('readonly');
                workplace_office_defendantField.style.backgroundColor = '';
                workplace_office_defendantField.setAttribute('required', 'required');

                profesional_school_defendantField.setAttribute('readonly', 'readonly');
                profesional_school_defendantField.removeAttribute('required');
                profesional_school_defendantField.style.backgroundColor = '#f5f5f5';
                profesional_school_defendantField.selectedIndex = 0;
            }
        });
    </script>
    
    @if (Session::has('status') && Session::get('status') == 'success')
    <script>
        swal("Mensaje", "{{ Session::get('message') }}", "success", {
            button: true,
            button: "Aceptar",
            timer: 5000,
        });
    </script>
    @elseif (Session::has('status') && Session::get('status') == 'error')
    <script>
        swal("Mensaje", "{{ Session::get('message') }}", "error", {
            button: true,
            button: "Aceptar",
            timer: 5000,
        });
    </script>
    @endif

@endsection
