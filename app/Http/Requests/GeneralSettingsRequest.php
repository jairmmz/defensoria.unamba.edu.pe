<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingsRequest extends FormRequest
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
            'title_website' => 'required|string',
            'logo_website' => 'mimes:jpeg,png,jpg,gif,svg|max:10240',
            'background_website' => 'mimes:jpeg,png,jpg,gif,svg|max:10240',
            'banner_website' => 'mimes:jpeg,png,jpg,gif,svg|max:10240',
            'url_banner' => 'nullable',
            'is_active_banner' => 'boolean',
            'number_phone' => 'required',
            'id_user' => 'required'
        ];
    }
}
