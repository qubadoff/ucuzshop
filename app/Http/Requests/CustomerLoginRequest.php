<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CustomerLoginRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'phone' => 'required|max:20',
            'password' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'phone.required' => 'Telefon nomresi daxil edilməlidir.',
            'password.required' => 'Sifre daxil edilməlidir.',
        ];
    }
}
