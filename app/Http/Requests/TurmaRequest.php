<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurmaRequest extends FormRequest
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
            'dataInicio' => 'required',
            'dataFim' =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo NOME esta em Branco!',
            'dataInicio.required' => 'Campo DATA DE INICIO esta em Branco!',
            'dataFim.required' => 'Campo DATA FIM esta em Branco!',
        ];
    }
}
