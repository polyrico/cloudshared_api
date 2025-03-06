<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCloudCredentialRequest extends FormRequest
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
            'name' => 'unique:clouds_credentials|max:50',
            'client_id' => 'max:255',
            'client_secret' => 'nullable|max:255',
            'scopes' => 'nullable|max:255',
            'redirect_url' => 'nullable|max:255'
        ];
    }
}
