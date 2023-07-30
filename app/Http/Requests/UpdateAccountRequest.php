<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountRequest extends FormRequest
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
            'name' => 'required',
            'level' => 'numeric|required',
            'bounty' => 'numeric|required',
            'image' => 'image|required',
            'fruit_id' => 'nullable'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            // Level
            'level.numeric' => 'O campo level deve conter apenas números.',
            'level.required' => 'O campo level é obrigatório.',
            // bounty
            'bounty.required' => 'O campo bounty é obrigatório.',
            'bounty.numeric' => 'O campo bounty deve conter apeans números.',
            // Image
            'image.image' => 'O campo de imagem deve ser uma imagem válida.',
            'image.required' => 'O campo image é obrigatório.'
        ];
    }
}
