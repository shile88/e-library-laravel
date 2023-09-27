<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGlobalVariableRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // If this method returns false, 403 error (Forbidden) will be shown
        // Maybe we should use Auth::check() here just to be sure
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
            'name' => 'required|min:3|unique:global_variables,name,' . $this->request->get('id'),
            'variable_name' => 'required|min:3|unique:global_variables,variable_name,' . $this->request->get('id'),
            'value' => 'required|integer',
            'unit' => 'required|min:2',
            'description' => 'required|min:10',
        ];
    }
}
