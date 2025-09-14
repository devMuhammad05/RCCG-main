<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreVolunteerSignUpRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'role_selected' => ['required', 'string', 'max:255'],
            'hours_selected' => ['required', 'string', 'max:255'],
            'skills_experience' => ['nullable', 'string', 'max:1000'],
            'confirm_availability' => ['required', 'boolean'],
            'agree_training' => ['required', 'boolean'],
        ];
    }
}
