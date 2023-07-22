@extends('frontend.layouts.app')
@section('content')
<!-- =============Hero Area============= -->

<!--=================Account Section================= -->
<section class="account-section padding-top padding-bottom bg_img bg_xxl_contain bg_right_bottom">
    <div class="container">
        <h2 class="account-title mb-4 text-center">Módulo de atención de reclamos y denuncias</h2>
        <div class="account-area">
            <form form method="POST" action="{{ route('attention-form.save') }}" enctype="multipart/form-data" autocomplete="off">
                {{ csrf_field() }}
                @method('POST')
                <h3 class="account-title mb-4">Datos del solicitante</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name_plaintiff">Nombres y apellidos</label>
                            <input name="name_plaintiff" type="text" required>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="identity_card_plaintiff">Código/DNI</label>
                            <input name="identity_card_plaintiff" type="number" required>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="condition_plaintiff">Cargo:</label>
                            <select name="condition_plaintiff" id="condition_plaintiff" required>
                                <option selected="true" disabled="disabled">Seleccione el cargo</option>                                
                                <option value="0">Estudiante</option>
                                <option value="1">Docente</option>
                                <option value="2">Administrativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="type_request">Tipo de solicitud</label>
                            <select name="type_request" required>
                                <option selected="true" disabled="disabled">Seleccione el tipo</option>                                
                                <option value="0">Consulta</option>
                                <option value="1">Queja</option>
                                <option value="2">Reclamo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label for="issue">Asunto</label>
                            <input name="issue" type="text" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6" id="profesional_school_plaintiff" style="display: none;">
                        <div class="form-group">
                            <label for="profesional_school_plaintiff">Escuela Profesional</label>
                            <select name="profesional_school_plaintiff">
                                <option selected="true" disabled="disabled">Seleccione la escuela profesional</option>                                
                                <option value="0">Administración</option>
                                <option value="1">Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia</option>
                                <option value="2">Ciencia Política y Gobernabilidad</option>
                                <option value="2">Ingeniería Agroindustrial</option>
                                <option value="2">Ingeniería de Minas</option>
                                <option value="2">Ingeniería Informática y Sistemas</option>
                                <option value="2">Ingeniería Civil</option>
                                <option value="2">Ingeniería Agroecológica y Desarrollo Rural</option>
                                <option value="2">Medicina Veterinaria y Zootécnia</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="workplace_office_plaintiff" style="display: none;">
                        <div class="form-group">
                            <label for="workplace_office_plaintiff">Centro de trabajo/Oficina</label>
                            <input name="workplace_office_plaintiff" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="home_address_plaintiff">Dirección (Av., Jr. Urb.)</label>
                            <input name="home_address_plaintiff" type="text">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="number_phone_plaintiff">Celular/teléfono</label>
                            <input name="number_phone_plaintiff" type="number">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="email_plaintiff">Correo electrónico</label>
                            <input name="email_plaintiff" type="email">
                        </div>
                    </div>
                </div>
                <h3 class="account-title mb-4">Datos del quejado / denunciado</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name_defendant">Nombres y apellidos</label>
                            <input name="name_defendant" type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="charge_defendant">Cargo:</label>
                            <select name="charge_defendant" id="charge_defendant">
                                <option selected="true" disabled="disabled">Seleccione el cargo</option>                                
                                <option value="0">Estudiante</option>
                                <option value="1">Docente</option>
                                <option value="2">Administrativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="number_phone_defendant">Celular/teléfono</label>
                            <input name="number_phone_defendant" type="number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6" id="profesional_school_defendant" style="display: none;">
                        <div class="form-group">
                            <label for="profesional_school_defendant">Escuela Profesional</label>
                            <select name="profesional_school_defendant" >
                                <option selected="true" disabled="disabled">Seleccione la escuela profesional</option>                                
                                <option value="0">Administración</option>
                                <option value="1">Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia</option>
                                <option value="2">Ciencia Política y Gobernabilidad</option>
                                <option value="2">Ingeniería Agroindustrial</option>
                                <option value="2">Ingeniería de Minas</option>
                                <option value="2">Ingeniería Informática y Sistemas</option>
                                <option value="2">Ingeniería Civil</option>
                                <option value="2">Ingeniería Agroecológica y Desarrollo Rural</option>
                                <option value="2">Medicina Veterinaria y Zootécnia</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="workplace_office_defendant" style="display: none;">
                        <div class="form-group">
                            <label for="workplace_office_defendant">Centro de trabajo/Oficina</label>
                            <input name="workplace_office_defendant" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="number_phone_defendant">Descripcion de los hechos</label>
                            <textarea name="description_facts"  cols="30" rows="10" required></textarea>                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="violated_rights">Derechos que estime vulnerados</label>
                            <input name="violated_rights" type="text">                    
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="attached_files">Documentos adjuntos</label>
                            <input type="file" name="attached_files[]" multiple>
                        </div>    
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" style="none">
                            <input type="hidden" name="status" value="pendiente">
                        </div>    
                    </div>
                </div>
                <div class="form-group w-100 mt-4">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>


    <script>
        document.getElementById('condition_plaintiff').addEventListener('change', function() {
            const selectedOption = this.value;
            const escuelaProfesionalField = document.getElementById('profesional_school_plaintiff');
            const workplaceOfficeField = document.getElementById('workplace_office_plaintiff');
    
            // Ocultar ambos campos por defecto
            escuelaProfesionalField.style.display = 'none';
            workplaceOfficeField.style.display = 'none';
    
            // Habilitar el campo apropiado según la opción seleccionada
            if (selectedOption === '0' || selectedOption === '1') {
                // Estudiante o docente seleccionado
                escuelaProfesionalField.style.display = 'block';
                escuelaProfesionalField.disabled = false;
                workplaceOfficeField.disabled = true;
            } else if (selectedOption === '2') {
                // Administrativo seleccionado
                workplaceOfficeField.style.display = 'block';
                workplaceOfficeField.disabled = false;
                escuelaProfesionalField.disabled = true;
            }
        });

        document.getElementById('charge_defendant').addEventListener('change', function() {
            const selectedOptionDefendant = this.value;
            const profesional_school_defendantField = document.getElementById('profesional_school_defendant');
            const workplace_office_defendantField = document.getElementById('workplace_office_defendant');
    
            // Ocultar ambos campos por defecto
            profesional_school_defendantField.style.display = 'none';
            workplace_office_defendantField.style.display = 'none';
    
            // Habilitar el campo apropiado según la opción seleccionada
            if (selectedOptionDefendant === '0' || selectedOptionDefendant === '1') {
                // Estudiante o docente seleccionado
                profesional_school_defendantField.style.display = 'block';
                profesional_school_defendantField.disabled = false;
                workplace_office_defendantField.disabled = true;
            } else if (selectedOptionDefendant === '2') {
                // Administrativo seleccionado
                workplace_office_defendantField.style.display = 'block';
                workplace_office_defendantField.disabled = false;
                profesional_school_defendantField.disabled = true;
            }
        });
    </script>
    
</section>
<!--=================Account Section================= -->
@endsection