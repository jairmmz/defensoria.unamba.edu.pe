<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthoritieRequest extends FormRequest
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
            'charge_authority' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'image_authority' => 'image|mimes:jpg,jpeg,png|max:10260',
            'id_user' => 'required|exists:users,id'
        ];
    }
}
