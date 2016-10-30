<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitucionalRequest extends FormRequest
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
            'descricao' =>  'required',
            'conteudo' =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'Informe a Descrição!',
            'conteudo.required' => 'Informe o Conteúdo!',
        ];
    }
}
