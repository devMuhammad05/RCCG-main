<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVolunteerSignUpRequest extends FormRequest
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
            'name' => ['sometimes', 'string', 'max:255'],
            'email' => ['sometimes', 'email', 'max:255'],
            'role_selected' => ['sometimes', 'string', 'max:255'],
            'hours_selected' => ['sometimes', 'string', 'max:255'],
            'skills_experience' => ['sometimes', 'nullable', 'string', 'max:1000'],
            'confirm_availability' => ['sometimes', 'boolean'],
            'agree_training' => ['sometimes', 'boolean'],
        ];
    }
}
