<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplinaRequest extends FormRequest
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
            'cargaHoraria' => 'required',
            'idTurma' =>  'required',
            'idProfessor' =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo NOME esta em Branco!',
            'cargaHoraria.required' => 'Campo CARGA HORÁRIA esta em Branco!',
            'idTurma.required' => 'Campo TURMA esta em Branco!',
            'idProfessor.required' => 'Campo PROFESSOR esta em Branco!',
        ];
    }
}
