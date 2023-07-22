<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttentionFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_plaintiff' => 'required',
            'identity_card_plaintiff' => 'required',
            'condition_plaintiff' => 'required',
            'type_request' => 'required',
            'issue' => 'required',
            'profesional_school_plaintiff' => 'max:255',
            'workplace_office_plaintiff' => 'max:255',
            'home_address_plaintiff' => 'max:255',
            'number_phone_plaintiff' => 'required',
            'email_plaintiff' => 'required',
            'name_defendant' => 'required',
            'profesional_school_defendant' => 'max:255',
            'workplace_office_defendant' => 'max:255',
            'charge_defendant' => 'required',
            'number_phone_defendant' => 'max:255',
            'description_facts' => 'required',
            'violated_rights' => 'max:255',
            'attached_files' => 'max:255',
            'status' => 'max:255',
        ];
    }
}
