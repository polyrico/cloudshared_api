<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStoreEntityRequest extends FormRequest
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
            'parent_store_entity' => 'nullable|exists:store_entities,uuid',
            'name' => 'required|max:50',
            'extention' => 'required|max:5',
            'size' => 'required|integer',
            'driver' => 'required|exists:drivers,uuid'
        ];
    }



    public function prepareForValidation()
    {
        $this->merge([
            'driver' => $this->driver->uuid,
        ]);
    }
}
