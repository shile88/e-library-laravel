<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'isbn' => 'required|unique:books,isbn',
            'description' => 'required|string',
            'page_count' => 'required|numeric',
            'total_count' => 'required|numeric',
            'year' => 'required|string',
            'language_id' => 'nullable|exists:languages,id',
            'genres_id' => 'required|array',
            'binding_id' => 'nullable|exists:bindings,id',
            'script_id' => 'nullable|exists:scripts,id',
            'size_id' => 'nullable|exists:sizes,id',
            'publisher_id' => 'nullable|exists:publishers,id',
            'authors.*' => 'required|exists:authors,id',
            'categories.*' => 'required|exists:categories,id',
        ];
    }
}
