@extends('frontend.layouts.app')
@section('content')
<style>
    .account-area{
        border: 4px solid #dee2e6; 
        border-radius: 5px;
        padding: 10px;
        }
</style>
    <!--=================Account Section================= -->
    <section class="account-section padding-top padding-bottom bg_img bg_xxl_contain bg_right_bottom">
        <div class="container">
            <h2 class="account-title mb-4 text-center">Módulo de atención de reclamos y denuncias</h2>
            <div class="account-area">
                <form class="" method="POST" action="{{ route('attention-form.save') }}" enctype="multipart/form-data" autocomplete="off">
                    {{ csrf_field() }}
                    @method('POST')
                    <h3 class="account-title mb-4">Datos del solicitante</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name_plaintiff">Nombres y apellidos <span class="text-danger">*</span></label>
                                <input name="name_plaintiff" type="text" value="{{ old('name_plaintiff') }}">
                                @error('name_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="identity_card_plaintiff">Código/DNI <span class="text-danger">*</span></label>
                                <input name="identity_card_plaintiff" type="number" value="{{ old('identity_card_plaintiff') }}">
                                @error('identity_card_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="condition_plaintiff">Cargo <span class="text-danger">*</span></label>
                                <select name="condition_plaintiff" id="condition_plaintiff">
                                    <option selected disabled>Seleccione el cargo</option>
                                    <option value="1" @if(old('condition_plaintiff') == '1') selected @endif>Estudiante</option>
                                    <option value="2" @if(old('condition_plaintiff') == '2') selected @endif>Docente</option>
                                    <option value="3" @if(old('condition_plaintiff') == '3') selected @endif>Administrativo</option>
                                </select>
                                @error('condition_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="type_request">Tipo de solicitud <span class="text-danger">*</span></label>
                                <select name="type_request">
                                    <option selected="true" disabled="disabled">Seleccione el tipo</option>
                                    <option value="1" @if(old('condition_plaintiff') == '1') selected @endif>Queja</option>
                                    <option value="2" @if(old('condition_plaintiff') == '2') selected @endif>Reclamo</option>
                                </select>
                                @error('type_request') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="issue">Asunto <span class="text-danger">*</span></label>
                                <input name="issue" type="text" value="{{ old('issue') }}">
                                @error('issue') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="profesional_school_plaintiff">Escuela Profesional</label>
                                <select name="profesional_school_plaintiff" disabled id="profesional_school_plaintiff">
                                    <option selected="true" disabled="disabled">Seleccione la escuela profesional</option>
                                    <option value="1" @if(old('condition_plaintiff') == '1') selected @endif>Administración</option>
                                    <option value="2" @if(old('condition_plaintiff') == '2') selected @endif>Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia</option>
                                    <option value="3" @if(old('condition_plaintiff') == '3') selected @endif>Ciencia Política y Gobernabilidad</option>
                                    <option value="4" @if(old('condition_plaintiff') == '4') selected @endif>Ingeniería Agroindustrial</option>
                                    <option value="5" @if(old('condition_plaintiff') == '5') selected @endif>Ingeniería de Minas</option>
                                    <option value="6" @if(old('condition_plaintiff') == '6') selected @endif>Ingeniería Informática y Sistemas</option>
                                    <option value="7" @if(old('condition_plaintiff') == '7') selected @endif>Ingeniería Civil</option>
                                    <option value="8" @if(old('condition_plaintiff') == '8') selected @endif>Ingeniería Agroecológica y Desarrollo Rural</option>
                                    <option value="9" @if(old('condition_plaintiff') == '9') selected @endif>Medicina Veterinaria y Zootécnia</option>
                                </select>
                                @error('profesional_school_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="workplace_office_plaintiff">Centro de trabajo/Oficina</label>
                                <input name="workplace_office_plaintiff" type="text" value="{{ old('workplace_office_plaintiff') }}" disabled id="workplace_office_plaintiff">
                                @error('workplace_office_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="home_address_plaintiff">Dirección (Av., Jr. Urb.)</label>
                                <input name="home_address_plaintiff" type="text" value="{{ old('home_address_plaintiff') }}">
                                @error('home_address_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="number_phone_plaintiff">Celular/teléfono <span class="text-danger">*</span></label>
                                <input name="number_phone_plaintiff" type="number" value="{{ old('number_phone_plaintiff') }}">
                                @error('number_phone_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="email_plaintiff">Correo electrónico <span class="text-danger">*</span></label>
                                <input name="email_plaintiff" type="email" value="{{ old('email_plaintiff') }}">
                                @error('email_plaintiff') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 class="account-title mb-4">Datos del quejado / denunciado</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name_defendant">Nombres y apellidos</label>
                                <input name="name_defendant" type="text" value="{{ old('name_defendant') }}">
                                @error('name_defendant') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="charge_defendant">Cargo:</label>
                                <select name="charge_defendant" id="charge_defendant">
                                    <option selected="true" disabled="disabled">Seleccione el cargo</option>
                                    <option value="1" @if(old('condition_plaintiff') == '1') selected @endif>Estudiante</option>
                                    <option value="2" @if(old('condition_plaintiff') == '2') selected @endif>Docente</option>
                                    <option value="3" @if(old('condition_plaintiff') == '3') selected @endif>Administrativo</option>
                                </select>
                                @error('charge_defendant') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="number_phone_defendant">Celular/teléfono</label>
                                <input name="number_phone_defendant" type="number" value="{{ old('number_phone_defendant') }}">
                                @error('number_phone_defendant') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="profesional_school_defendant">Escuela Profesional</label>
                                <select name="profesional_school_defendant" id="profesional_school_defendant" disabled>
                                    <option selected="true" disabled="disabled">Seleccione la escuela profesional</option>
                                    <option value="1" @if(old('condition_plaintiff') == '1') selected @endif>Administración</option>
                                    <option value="2" @if(old('condition_plaintiff') == '2') selected @endif>Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia</option>
                                    <option value="3" @if(old('condition_plaintiff') == '3') selected @endif>Ciencia Política y Gobernabilidad</option>
                                    <option value="4" @if(old('condition_plaintiff') == '4') selected @endif>Ingeniería Agroindustrial</option>
                                    <option value="5" @if(old('condition_plaintiff') == '5') selected @endif>Ingeniería de Minas</option>
                                    <option value="6" @if(old('condition_plaintiff') == '6') selected @endif>Ingeniería Informática y Sistemas</option>
                                    <option value="7" @if(old('condition_plaintiff') == '7') selected @endif>Ingeniería Civil</option>
                                    <option value="8" @if(old('condition_plaintiff') == '8') selected @endif>Ingeniería Agroecológica y Desarrollo Rural</option>
                                    <option value="9" @if(old('condition_plaintiff') == '9') selected @endif>Medicina Veterinaria y Zootécnia</option>
                                </select>
                                @error('profesional_school_defendant') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="workplace_office_defendant">Centro de trabajo/Oficina</label>
                                <input name="workplace_office_defendant" type="text" value="{{ old('workplace_office_defendant') }}" id="workplace_office_defendant" disabled>
                                @error('workplace_office_defendant') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="number_phone_defendant">Descripcion de los hechos <span class="text-danger">*</span></label>
                                <textarea name="description_facts" cols="30" rows="10">{{ old('description_facts') }}</textarea>
                                @error('description_facts') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="violated_rights">Derechos que estime vulnerados</label>
                                <input name="violated_rights" type="text" value="{{ old('violated_rights') }}">
                                @error('violated_rights') <p class='text-danger small'> {{ $message }} </p> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description_files">Descripción de los documentos adjuntos</label>
                                <input name="description_files" type="text" value="{{ old('description_files') }}">
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
                    <div class="form-group w-100 mt-4">
                        <input type="submit" value="Enviar">
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
                // Estudiante o docente seleccionado
                escuelaProfesionalField.removeAttribute('disabled');
                workplaceOfficeField.setAttribute('disabled', 'disabled');
            } else if (selectedOption === '2' || selectedOption === '3') {
                // Administrativo seleccionado
                workplaceOfficeField.removeAttribute('disabled');
                escuelaProfesionalField.setAttribute('disabled', 'disabled');
            }
        });

        document.getElementById('charge_defendant').addEventListener('change', function() {
            const selectedOptionDefendant = this.value;
            const profesional_school_defendantField = document.getElementById('profesional_school_defendant');
            const workplace_office_defendantField = document.getElementById('workplace_office_defendant');

            // Deshabilitar ambos campos por defecto
            profesional_school_defendantField.disabled = true;
            workplace_office_defendantField.disabled = true;

            // Habilitar el campo apropiado según la opción seleccionada
            if (selectedOptionDefendant === '1') {
                // Estudiante o docente seleccionado
                profesional_school_defendantField.removeAttribute('disabled');
                workplace_office_defendantField.setAttribute('disabled', 'disabled');
            } else if (selectedOptionDefendant === '2' || selectedOptionDefendant === '3') {
                // Administrativo seleccionado
                profesional_school_defendantField.setAttribute('disabled', 'disabled');
                workplace_office_defendantField.removeAttribute('disabled');
            }
        });
    </script>
    
    @if (Session::has('status') && Session::get('status') == 'success')
    <script>
        swal("Mensaje", "{{ Session::get('message') }}", "success", {
            button: true,
            button: "Aceptar",
            timer: 3000,
        });
    </script>
    @elseif (Session::has('status') && Session::get('status') == 'error')
    <script>
        swal("Mensaje", "{{ Session::get('message') }}", "error", {
            button: true,
            button: "Aceptar",
            timer: 3000,
        });
    </script>
    @endif

@endsection
