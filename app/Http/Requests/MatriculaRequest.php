<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatriculaRequest extends FormRequest
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
            'idAluno' =>  'required',
            'idTurma' =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'idAluno.required' => 'Informe no mínimo um ALUNO!',
            'idTurma.required' => 'Campo TURMA esta em Branco!',
        ];
    }
}
