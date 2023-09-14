<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePublisherRequest extends FormRequest
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
        // Name of a publisher must have min. length of 3 characters and have unique value in table categories except
        // when the value IS the current publisher. In that case we provide it's ID and it ignores this rule
        return [
            'name' => 'min:3|unique:publishersZ,name,' . $this->request->get('id')
        ];
    }
}
