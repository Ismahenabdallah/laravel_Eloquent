<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:posts',
            'description' => 'required ',
        ];
    }

    public function messages(): array
    {
    return [
        /** on specidier les message d'error */
        'title.required' => 'required field',
        'title.unique' => 'title exsit deja ',
    ];
}
}
