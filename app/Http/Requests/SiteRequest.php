<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteRequest extends FormRequest
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
            'dataNascimento' => 'required',
            'sexo' =>  'required',
            'estadoCivil' => 'required',
            'cpf' => 'required|unique:pessoas',
            'rg' => 'required',
            'orgaoEmissor' => 'required',
            'enderecoRua' => 'required',
            'enderecoNumero' => 'required',
            'enderecoBairro' => 'required',
            'enderecoCep' => 'required',
            'enderecoCidade' => 'required',
            'enderecoEstado' => 'required',
            'senha' => 'required',
            'email' => 'required|unique:pessoas',
            'idTurma' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo NOME esta em Branco!',
            'dataNascimento.required' => 'Campo DATA DE NASCIMENTO esta em Branco!',
            'sexo.required' => 'Campo SEXO esta em Branco!',
            'estadoCivil.required' => 'Campo ESTADO CIVIL esta em Branco!',
            'cpf.required' => 'Campo CPF esta em Branco!',
            'cpf.unique' => 'O CPF informado já existe!',
            'rg.required' => 'Campo RG esta em Branco!',
            'orgaoEmissor.required' => 'Campo ORGÃO EMISSOR esta em Branco!',
            'enderecoRua.required' => 'Campo ENDEREÇO esta em Branco!',
            'enderecoNumero.required' => 'Campo NÚMERO esta em Branco!',
            'enderecoBairro.required' => 'Campo BAIRRO esta em Branco!',
            'enderecoCep.required' => 'Campo CEP esta em Branco!',
            'enderecoCidade.required' => 'Campo CIDADE esta em Branco!',
            'enderecoEstado.required' => 'Campo ESTADO esta em Branco!',
            'senha.required' => 'Campo Senha esta em Branco!',
            'email.required' => 'Campo EMAIL esta em Branco!',
            'email.unique' => 'O EMAIL informado já existe!',
            'idTurma.required' => 'Campo TURMA deve ser Selecionado!'
            ];
    }
}
