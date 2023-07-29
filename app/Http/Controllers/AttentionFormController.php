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
        $data = $request->validate([
            'name_plaintiff' => 'required|string',
            'identity_card_plaintiff' => 'required|numeric',
            'condition_plaintiff' => 'required',
            'type_request' => 'required',
            'issue' => 'required',
            'profesional_school_plaintiff' => 'max:255',
            'workplace_office_plaintiff' => 'max:50',
            'home_address_plaintiff' => 'max:255',
            'number_phone_plaintiff' => 'required|numeric',
            'email_plaintiff' => 'required|email',
            'name_defendant' => 'max:50',
            'charge_defendant' => 'max:255',
            'number_phone_defendant' => 'max:255',
            'profesional_school_defendant' => 'max:255',
            'workplace_office_defendant' => 'max:255',
            'description_facts' => 'required',
            'violated_rights' => 'max:255',
            'description_files' => 'max:255',
            'status' => 'max:255',
        ],
        [
            'name_plaintiff.required' => 'Los nombres y apellidos son obligatorios.',
            'identity_card_plaintiff.required' => 'Ingrese el código o dni.',
            'identity_card_plaintiff.numeric' => 'El código o dni debe ser numérico',
            'condition_plaintiff.required' => 'Debe seleccionar una condición.',
            'type_request.required' => 'Seleccione el tipo de solicitud.',
            'issue.required' => 'Ingrese el asunto de la solicitud.',
            'profesional_school_plaintiff.max' => 'El campo escuela profesional del demandante no debe exceder los 255 caracteres.',
            'workplace_office_plaintiff.max' => 'El campo lugar de trabajo del demandante no debe exceder los 50 caracteres.',
            'home_address_plaintiff.max' => 'El campo dirección del demandante no debe exceder los 255 caracteres.',
            'number_phone_plaintiff.required' => 'El número obligatorio.',
            'number_phone_plaintiff.numeric' => 'El número debe ser numérico.',
            'email_plaintiff.required' => 'El correo electrónico es obligatorio.',
            'name_defendant.max' => 'El campo debe exceder los 50 caracteres',
            'charge_defendant.max' => 'El campo cargo del demandado no debe exceder los 255 caracteres.',
            'number_phone_defendant.max' => 'Ingrese el número del demandado no debe exceder los 255 caracteres.',
            'profesional_school_defendant.max' => 'El campo escuela profesional del demandado no debe exceder los 255 caracteres.',
            'workplace_office_defendant.max' => 'El campo lugar de trabajo del demandado no debe exceder los 255 caracteres.',
            'description_facts.required' => 'El campo descripción es obligatorio.',
            'violated_rights.max' => 'El campo derechos violados no debe exceder los 255 caracteres.',
            'description_files.max' => 'El campo descripción de los archivos no debe exceder los 255 caracteres.',
            'status.max' => 'El campo estado no debe exceder los 255 caracteres.',
        ]);

        $newAttentionForm = AttentionForm::create($data);

        // Convertir a slug el nombre del demandante
        $namePlaintiff = str_replace(' ', '-', $newAttentionForm->name_plaintiff);

        if ($request->has('file_attention_form')) {
            // Save files in directory assets attention-form 
            foreach ($request->file_attention_form as $file) {
                $fileName = $namePlaintiff. '_' .$newAttentionForm->id . $file->getClientOriginalName();
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
        $imageUNAMBA = '/assets/images/universidad-nacional-micaela-bastidas-logo.jpg';
        $imageTH = '/assets/images/logo-th.png';

        $pdf = Pdf::loadView('backend.pages.attention-form.attention-form-pdf', compact('imageUNAMBA', 'imageTH'))->setPaper('a4', 'landscape');

        return $pdf->stream('regulations.pdf');
        // return view('backend.pages.regulations.regulations-pdf', compact('regulations', 'imageUNAMBA', 'imageTH'));
    }
}
