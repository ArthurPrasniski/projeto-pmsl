<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoAluno extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'date' => 'required',
            'sexo' => 'required',
            'bairro' => 'required',
            'rua' => 'required',
            'numero' => 'required|numeric',
            'complemento' => 'required',
            'cidade' => 'required',
        ];
    }
    public function messages()
    {

        return [
            'required' => 'Campo obrigatorio!',
        ];
    }
}
