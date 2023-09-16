<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
        // Name of a category must be provided, have min. length of 3 characters and have unique value in table categories
        return [
            'name' => 'required|min:3|unique:categories',
            'icon' => 'sometimes',
            'description' => 'sometimes'
        ];
    }
}
