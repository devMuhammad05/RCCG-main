<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedbackRequest extends FormRequest
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
            'type'             => ['required', 'string', 'max:100'],
            'email'            => ['nullable', 'email', 'max:255'],
            'message'          => ['required', 'string', 'max:1000'],
            'can_be_contacted' => ['required', 'boolean'],
        ];
    }
}
