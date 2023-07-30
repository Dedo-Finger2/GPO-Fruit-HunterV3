<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRarityRequest extends FormRequest
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
            'name' => 'required|string|unique:rarities,name',
            'chances_on_getting' => 'required',
            'class' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            // name
            'name.string' => 'O nome da raridade deve ser uma string.',
            'name.unique' => 'Essa raridade já está cadastrada no banco de dados.',
            'name.required' => 'O campo nome é obrigatório.',
            // chances
            'chances_on_getting.required' => 'O campo chances é obrigatório.',
            // class
            'class.required' => 'O campo de classe é obrigatório.'
        ];
    }
}
