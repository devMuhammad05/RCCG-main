<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfileRequest extends FormRequest
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
            'name'            => ['sometimes', 'string', 'max:255'],
            'email'           => [
                'sometimes',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->user()->id),
            ],
            'phone_number'    => ['sometimes', 'string', 'max:20'],
            'profession'      => ['sometimes', 'string', 'max:100'],
            'location'        => ['sometimes', 'string', 'max:255'],
            'bio'             => ['sometimes', 'string', 'max:500'],
            'short_testimony' => ['sometimes', 'string', 'max:255'],
            'avatar'          => ['sometimes', 'url'],

            // Social media links
            'instagram_url'   => ['sometimes', 'nullable', 'url'],
            'whatsapp_url'    => ['sometimes', 'nullable', 'url'],
            'facebook_url'    => ['sometimes', 'nullable', 'url'],
            'x_url'           => ['sometimes', 'nullable', 'url'],
            'linkedin_url'    => ['sometimes', 'nullable', 'url'],

        ];
    }
}
