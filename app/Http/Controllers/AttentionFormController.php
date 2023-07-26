<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttentionFormRequest;
use App\Models\AttentionForm;
use App\Models\GeneralSetting;

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

    public function store(AttentionFormRequest $request)
    {
        $attentionForm = $request->all();
    
        // Guardar los multiples archivos
        if ($files = $request->file('attached_files')) {
            $routeSaveFile = 'assets/form-files/';
            $data = []; // Inicializamos el arreglo para los nombres de archivos
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move($routeSaveFile, $fileName);
                $data[] = $fileName;
            }
            $attentionForm['attached_files'] = json_encode($data); // Convertir a JSON
        }
    
        AttentionForm::create($attentionForm);
        
        return view('frontend.pages.attention-form')->with('success', 'Su solicitud ha sido enviada con éxito. En breve nos comunicaremos con usted.');
    }
    


    public function generatePDF(AttentionForm $attentionForm)
    {
        //
    }

    public function generateExcel(AttentionForm $attentionForm)
    {
        //
    }

}
