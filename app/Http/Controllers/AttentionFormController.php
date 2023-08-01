<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttentionFormRequest;
use App\Models\AttentionForm;
use App\Models\Authoritie;
use App\Models\FileAttentionForm;
use App\Models\GeneralSetting;
use App\Notifications\FormNotification;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

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
        try {
            $data = $request->validate(
                [
                    'name_plaintiff' => 'required|string',
                    'identity_code_plaintiff' => 'max:6',
                    'identity_dni_plaintiff' => 'required|numeric|digits:8',
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
                    'number_phone_defendant' => 'max:9',
                    'profesional_school_defendant' => 'max:255',
                    'workplace_office_defendant' => 'max:255',
                    'description_facts' => 'required',
                    'violated_rights' => 'max:255',
                    'description_files' => 'max:255',
                    'signature_plaintiff' => 'required|mimes:png,jpg,jpeg',
                    'status' => 'max:255',
                ],
                [
                    'name_plaintiff.required' => 'Los nombres y apellidos son obligatorios.',
                    'name_plaintiff.string' => 'Los nombres y apellidos deben ser una cadena de caracteres.',
                    'identity_code_plaintiff.max' => 'El código no debe exceder los 8 digitos',
                    'identity_dni_plaintiff.required' => 'El dni es obligatorio.',
                    'identity_dni_plaintiff.numeric' => 'El dni debe ser numérico.',
                    'identity_dni_plaintiff.digits' => 'El dni debe tener 8 dígitos.',
                    'condition_plaintiff.required' => 'Debe seleccionar una ocupación.',
                    'type_request.required' => 'Seleccione el tipo de solicitud.',
                    'issue.required' => 'Ingrese el asunto de la solicitud.',
                    'profesional_school_plaintiff.max' => 'El campo escuela profesional del demandante no debe exceder los 50 caracteres.',
                    'workplace_office_plaintiff.max' => 'El campo lugar de trabajo del demandante no debe exceder los 50 caracteres.',
                    'home_address_plaintiff.max' => 'El campo dirección del demandante no debe exceder los 255 caracteres.',
                    'number_phone_plaintiff.required' => 'El número es obligatorio.',
                    'number_phone_plaintiff.numeric' => 'El campo debe ser numérico.',
                    'email_plaintiff.required' => 'El correo electrónico es obligatorio.',
                    'email_plaintiff.email' => 'El correo electrónico debe ser válido',
                    'name_defendant.required' => 'Los nombres y apellidos son obligatorios',
                    'name_defendant.string' => 'El campo debe ser una cadena de caracteres.',
                    'charge_defendant.required' => 'Debe seleccionar una ocupación.',
                    'number_phone_defendant.max' => 'El número no debe exceder los 9 dígitos.',
                    'profesional_school_defendant.max' => 'El campo escuela profesional del demandado no debe exceder los 255 caracteres.',
                    'workplace_office_defendant.max' => 'El campo lugar de trabajo del demandado no debe exceder los 255 caracteres.',
                    'description_facts.required' => 'El campo descripción es obligatorio.',
                    'violated_rights.max' => 'El campo derechos violados no debe exceder los 255 caracteres.',
                    'description_files.max' => 'El campo descripción de los archivos no debe exceder los 255 caracteres.',
                    'signature_plaintiff.required' => 'La firma es obligatoria.',
                    'signature_plaintiff.mimes' => 'La firma debe ser una imagen.',
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

            if ($image = $request->file('signature_plaintiff')) {
                $routeSaveImage = 'assets/attention-form';
                $imageSignature = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($routeSaveImage, $imageSignature);
                $user['signature_plaintiff'] = "$imageSignature";
            }

            $email = $request->email_plaintiff;
            Notification::route('mail', $email)->notify(new FormNotification($request->name_plaintiff));

            return to_route('frontend.attention-form')->with(['status' => 'success', 'message' => 'El formulario ha sido enviado con éxito para su atención']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(AttentionForm $attentionForm)
    {
        try {

            $filesPlaintiff = FileAttentionForm::where('attention_form_id', $attentionForm->id)->get();

            $identityPlaintiff = str_replace(' ', '-', $attentionForm->name_plaintiff) . '_' . $attentionForm->id;
            $authoritie = Authoritie::first();
            $setting = GeneralSetting::first();

            return view(
                'backend.pages.attention-form.view-attention-form',
                compact('setting', 'filesPlaintiff', 'authoritie', 'attentionForm', 'identityPlaintiff')
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(AttentionFormRequest $request, AttentionForm $attentionForm)
    {
        try {
            $attentionFormUpdate = $request->all();
            $attentionForm->update($attentionFormUpdate);

            return to_route('attention-form-index')->with('message', 'Operación realizada correctamente');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function generatePDF(AttentionForm $attentionForm)
    {
        try {

            $identityPlaintiff = str_replace(' ', '-', $attentionForm->name_plaintiff) . '_' . $attentionForm->id;
            $authoritie = Authoritie::first();
            $setting = GeneralSetting::first();

            // Ruta del logo UNAMBA Y TH
            $imageUNAMBA = '/assets/images/universidad-nacional-micaela-bastidas-logo.jpg';
            $imageTH = '/assets/images/logo-th.png';
            // $signature_plaintiff = '/assets/attention-form/20230731190141.png';
            $signature_plaintiff = url('assets/attention-form/' . $attentionForm->signature_plaintiff);
            
            $pdf = Pdf::loadView(
                'backend.pages.attention-form.attention-form-pdf',
                compact(
                    'authoritie',
                    'attentionForm',
                    'setting',
                    'identityPlaintiff',
                    'imageUNAMBA',
                    'imageTH',
                    'signature_plaintiff',
                )
            )->setPaper('a4', 'landscape');

            return $pdf->stream('solicitud' . '_' . $identityPlaintiff . '.pdf');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
