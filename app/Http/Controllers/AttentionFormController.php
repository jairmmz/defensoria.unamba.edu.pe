<?php

namespace App\Http\Controllers;

use App\Models\AttentionForm;
use App\Models\FileAttentionForm;
use App\Models\GeneralSetting;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class AttentionFormController extends Controller
{
    public function index()
    {
        $attentionForms = AttentionForm::all();

        $setting = GeneralSetting::first();

        return view('backend.pages.attention-form.index-attention-form', compact('setting', 'attentionForms'));
    }

    public function indexFront()
    {
        $setting = GeneralSetting::first();

        return view('frontend.pages.attention-form', compact('setting'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name_plaintiff' => 'required|string',
                'identity_card_plaintiff' => 'required|numeric',
                'condition_plaintiff' => 'required',
                'type_request' => 'required',
                'issue' => 'required',
                'profesional_school_plaintiff' => 'max:50',
                'workplace_office_plaintiff' => 'max:50',
                'home_address_plaintiff' => 'max:255',
                'number_phone_plaintiff' => 'required|numeric',
                'email_plaintiff' => 'required|email',
                'name_defendant' => 'required|string',
                'charge_defendant' => 'required',
                'number_phone_defendant' => 'numeric',
                'profesional_school_defendant' => 'max:255',
                'workplace_office_defendant' => 'max:255',
                'description_facts' => 'required',
                'violated_rights' => 'max:255',
                'description_files' => 'max:255',
                'status' => 'max:255',
            ],
            [
                'name_plaintiff.required' => 'Los nombres y apellidos son obligatorios.',
                'name_plaintiff.string' => 'Los nombres y apellidos deben ser una cadena de caracteres.',
                'identity_card_plaintiff.required' => 'Ingrese el código o dni.',
                'identity_card_plaintiff.numeric' => 'El código o dni debe ser numérico',
                'condition_plaintiff.required' => 'Debe seleccionar una condición.',
                'type_request.required' => 'Seleccione el tipo de solicitud.',
                'issue.required' => 'Ingrese el asunto de la solicitud.',
                'profesional_school_plaintiff.max' => 'El campo escuela profesional del demandante no debe exceder los 50 caracteres.',
                'workplace_office_plaintiff.max' => 'El campo lugar de trabajo del demandante no debe exceder los 50 caracteres.',
                'home_address_plaintiff.max' => 'El campo dirección del demandante no debe exceder los 255 caracteres.',
                'number_phone_plaintiff.required' => 'El número es obligatorio.',
                'number_phone_plaintiff.numeric' => 'El campo debe ser numérico.',
                'email_plaintiff.required' => 'El correo electrónico es obligatorio.',
                'email_plaintiff.email' => 'El correo electrónico debe ser válido',
                'name_defendant.required' => 'El campo es obligatorio.',
                'name_defendant.string' => 'El campo debe ser una cadena de caracteres.',
                'charge_defendant.required' => 'El campo es obligatorio.',
                'number_phone_defendant.numeric' => 'El campo debe ser numérico.',
                'profesional_school_defendant.max' => 'El campo escuela profesional del demandado no debe exceder los 255 caracteres.',
                'workplace_office_defendant.max' => 'El campo lugar de trabajo del demandado no debe exceder los 255 caracteres.',
                'description_facts.required' => 'El campo descripción es obligatorio.',
                'violated_rights.max' => 'El campo derechos violados no debe exceder los 255 caracteres.',
                'description_files.max' => 'El campo descripción de los archivos no debe exceder los 255 caracteres.',
                'status.max' => 'El campo estado no debe exceder los 50 caracteres.',
            ]
        );

        $newAttentionForm = AttentionForm::create($data);

        // Convertir a slug el nombre del demandante
        $namePlaintiff = str_replace(' ', '-', $newAttentionForm->name_plaintiff);

        if ($request->has('file_attention_form')) {
            // Save files in directory assets attention-form 
            foreach ($request->file_attention_form as $file) {
                $fileName = $namePlaintiff . '_' . $newAttentionForm->id . $file->getClientOriginalName();
                $file->move(public_path('assets/attention-form'), $fileName);

                FileAttentionForm::create([
                    'attention_form_id' => $newAttentionForm->id,
                    'file_attention_form' => $fileName
                ]);
            }
        }

        return to_route('frontend.attention-form')->with(['status' => 'success', 'message' => 'Su formulario de atención ha sido enviado con éxito.']);
    }

    public function show(AttentionForm $attentionForm)
    {
        $setting = GeneralSetting::first();

        return view('backend.pages.attention-form.view-attention-form', compact('attentionForm', 'setting'));
    }

    public function generatePDF(AttentionForm $attentionForm)
    {
        $identityPlaintiff = str_replace(' ', '-', $attentionForm->name_plaintiff) . '_' . $attentionForm->id;

        // Ruta del logo UNAMBA Y TH
        $imageUNAMBA = '/assets/images/universidad-nacional-micaela-bastidas-logo.jpg';
        $imageTH = '/assets/images/logo-th.png';

        // Mapear attentionForm->profesional_school_plaintiff por el nombre de la facultad
        $arrayProfesionalFaculty = [
            1 => 'Administración',
            2 => 'Educación y Ciencias Sociales',
            3 => 'Educación y Ciencias Sociales',
            4 => 'Ingeniería',
            5 => 'Ingeniería',
            6 => 'Ingeniería',
            7 => 'Ingeniería',
            8 => 'Ingeniería',
            9 => 'Medicina Veterinaria',
        ];

        // Mapear el attentionForm->profesional_school_plaintiff por el nombre de la escuela profesional
        $arrayProfesionalSchools = [
            1 => 'Administración',
            2 => 'Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia',
            3 => 'Ciencia Política y Gobernabilidad',
            4 => 'Ingeniería Agroindustrial',
            5 => 'Ingeniería de Minas',
            6 => 'Ingeniería Informática y Sistemas',
            7 => 'Ingeniería Civil',
            8 => 'Ingeniería Agroecológica y Desarrollo Rural',
            9 => 'Medicina Veterinaria y Zootécnia',
        ];

        if ((!$attentionForm->workplace_office_plaintiff and !$attentionForm->workplace_office_defendant) and ($attentionForm->profesional_school_plaintiff and $attentionForm->profesional_school_defendant)) {

            $attentionForm_profesional_faculty_plaintiff = $arrayProfesionalFaculty[$attentionForm->profesional_school_plaintiff];
            $attentionForm_profesional_school_plaintiff = $arrayProfesionalSchools[$attentionForm->profesional_school_plaintiff];

            $attentionForm_profesional_faculty_defendant = $arrayProfesionalFaculty[$attentionForm->profesional_school_defendant];
            $attentionForm_profesional_school_defendant = $arrayProfesionalSchools[$attentionForm->profesional_school_defendant];

            $pdf = Pdf::loadView(
                'backend.pages.attention-form.attention-form-pdf',
                compact(
                    'attentionForm',
                    'identityPlaintiff',
                    'attentionForm_profesional_faculty_plaintiff',
                    'attentionForm_profesional_school_plaintiff',
                    'attentionForm_profesional_faculty_defendant',
                    'attentionForm_profesional_school_defendant',
                    'imageUNAMBA',
                    'imageTH'
                )
            )->setPaper('a4', 'landscape');
        }

        if ((!$attentionForm->workplace_office_plaintiff and $attentionForm->workplace_office_defendant) and ($attentionForm->profesional_school_plaintiff)) {
            $attentionForm_profesional_faculty_plaintiff = $arrayProfesionalFaculty[$attentionForm->profesional_school_plaintiff];
            $attentionForm_profesional_school_plaintiff = $arrayProfesionalSchools[$attentionForm->profesional_school_plaintiff];

            $pdf = Pdf::loadView(
                'backend.pages.attention-form.attention-form-pdf',
                compact(
                    'attentionForm',
                    'identityPlaintiff',
                    'attentionForm_profesional_faculty_plaintiff',
                    'attentionForm_profesional_school_plaintiff',
                    'imageUNAMBA',
                    'imageTH'
                )
            )->setPaper('a4', 'landscape');
        }

        if (($attentionForm->workplace_office_plaintiff and !$attentionForm->workplace_office_defendant) and ($attentionForm->profesional_school_defendant)) {

            $attentionForm_profesional_faculty_defendant = $arrayProfesionalFaculty[$attentionForm->profesional_school_defendant];
            $attentionForm_profesional_school_defendant = $arrayProfesionalSchools[$attentionForm->profesional_school_defendant];

            $pdf = Pdf::loadView(
                'backend.pages.attention-form.attention-form-pdf',
                compact(
                    'attentionForm',
                    'identityPlaintiff',
                    'attentionForm_profesional_faculty_defendant',
                    'attentionForm_profesional_school_defendant',
                    'imageUNAMBA',
                    'imageTH'
                )
            )->setPaper('a4', 'landscape');
        }

        if (($attentionForm->workplace_office_plaintiff and !$attentionForm->workplace_office_defendant or
                !$attentionForm->workplace_office_plaintiff and $attentionForm->workplace_office_defendant)
            and (!$attentionForm->profesional_school_plaintiff and !$attentionForm->profesional_school_defendant)
        ) {

            $pdf = Pdf::loadView(
                'backend.pages.attention-form.attention-form-pdf',
                compact(
                    'attentionForm',
                    'identityPlaintiff',
                    'imageUNAMBA',
                    'imageTH'
                )
            )->setPaper('a4', 'landscape');
        }

        return $pdf->stream('solicitud' . '_' . $identityPlaintiff . '.pdf');
    }
}
