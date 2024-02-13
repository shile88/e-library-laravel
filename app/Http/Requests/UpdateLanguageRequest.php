<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateLanguageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Authorizes this request only if user is logged in
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // Name of a language must have min. length of 3 characters and have unique value in table categories except
        // when the value IS the current language. In that case we provide it's ID and it ignores this rule
        return [
            'name' => 'min:3|unique:languages,name,' . $this->request->get('id')
        ];
    }
}
