<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFruitRequest extends FormRequest
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
            'image' => 'required',
            'name' => 'required',
            'rarity_id' => 'required',
            'description' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'image.required' => 'O campo de imagem é obrigatório.',
            // name
            'name.required' => 'O campo de nome é obrigatório.',
            // rarity
            'rarity_id.required' => 'O campo de raridade é obrigatório.',
            // desc
            'description.required' => 'O campo de descrição é obrigatório.',
            'description.string' => 'O campo de descrição só pode conter palavras.',
        ];
    }
}
