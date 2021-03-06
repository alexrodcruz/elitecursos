<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialRequest extends FormRequest
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
            'idTurma' =>  'required',
            'idDisciplina' =>  'required',
            'idAssunto' => 'required',
            'material' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'idTurma.required' => 'Campo TURMA esta em Branco!',
            'idDisciplina.required' => 'Campo DISCIPLINA esta em Branco!',
            'idAssunto.required' => 'Campo ASSUNTO esta em Branco!',
            'material.required' => 'Informe o LINK ou insira pelo menos 1(um) anexo!',
        ];
    }
}