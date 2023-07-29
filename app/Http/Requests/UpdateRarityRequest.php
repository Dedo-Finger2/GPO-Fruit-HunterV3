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
            'name' => 'string|unique:rarities,name,'.$rarityId,
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'O nome da raridade deve ser uma string.',
            'name.unique' => 'Essa raridade já está cadastrada no banco de dados.',
        ];
    }
}
