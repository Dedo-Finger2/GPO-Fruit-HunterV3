<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRarityRequest extends FormRequest
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
        $rarityId = $this->request->get('rarity_id');

        return [
            'name' => 'required|string|unique:rarities,name,'.$rarityId,
            'chances_on_getting' => 'required',
            'class' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            // name
            'name.string' => 'O nome da raridade deve ser uma string.',
            'name.required' => 'O nome da raridade é obrigatório.',
            'name.unique' => 'Essa raridade já está cadastrada no banco de dados.',
            // Chances
            'chances_on_getting.required' => 'A chance de obter é obrigatório.',
            // class
            'class.required' => 'O campo de class é obrigatório.'
        ];
    }
}
