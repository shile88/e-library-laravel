<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required|min:20',
            'isbn' => 'required|size:13',
            'publish_date' => 'required|date|before:today',
            'authors' => 'required|exists:authors,id',
            'categories' => 'required|exists:categories,id',
            'genres' => 'required|exists:genres,id',
            'binding_id' => 'required|exists:bindings,id',
            'publisher_id' => 'required|exists:publishers,id',
            'script_id' => 'required|exists:scripts,id',
            'size_id' => 'required|exists:sizes,id',
            'page_count' => 'required|integer|min:1',
            'total_count' => 'required|integer|min:1',
            'pictures.*' => 'sometimes'
        ];
    }
}
