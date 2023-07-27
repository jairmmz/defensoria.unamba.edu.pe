<?php

namespace App\Http\Controllers;

use App\Models\AttentionForm;
use App\Models\FileAttentionForm;
use App\Models\GeneralSetting;
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
            'name_plaintiff' => 'required',
            'identity_card_plaintiff' => 'required',
            'condition_plaintiff' => 'required',
            'type_request' => 'required',
            'issue' => 'required',
            'profesional_school_plaintiff' => 'max:255',
            'workplace_office_plaintiff' => 'max:50',
            'home_address_plaintiff' => 'max:255',
            'number_phone_plaintiff' => 'required',
            'email_plaintiff' => 'required',
            'name_defendant' => 'required',
            'charge_defendant' => 'max:255',
            'number_phone_defendant' => 'max:255',
            'profesional_school_defendant' => 'max:255',
            'workplace_office_defendant' => 'max:255',
            'description_facts' => 'required',
            'violated_rights' => 'max:255',
            'description_files' => 'max:255',
            'status' => 'max:255',
        ]);

        $newAttentionForm = AttentionForm::create($data);

        if ($request->has('file_attention_form')) {
            // Save files in directory assets attention-form 
            foreach ($request->file_attention_form as $file) {
                $fileName = $data['created_at'] . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/attention-form'), $fileName);

                FileAttentionForm::create([
                    'attention_form_id' => $newAttentionForm->id,
                    'file' => $fileName
                ]);
            }
        }

        dd($newAttentionForm);
    }



    public function generatePDF(AttentionForm $attentionForm)
    {
        //
    }
}
