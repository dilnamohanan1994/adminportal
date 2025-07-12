<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomFieldRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'module' => 'required|in:Customer,Invoice',
            'name' => 'required|string|max:255',
            'type' => 'required|in:text,date,decimal,dropdown,lookup',
            'dropdown_options' => 'nullable|array',
            'lookup_module' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'module.in' => 'Only Customer or Invoice modules are allowed.',
            'type.in' => 'Invalid type. Allowed types: text, date, decimal, dropdown, lookup.',
        ];
    }
}
