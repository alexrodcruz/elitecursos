<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
                            'nome',
                            'sexo',
                            'dataNascimento',
                            'estadoCivil',
                            'cpf',
                            'rg',
                            'orgaoEmissor',
                            'fone1',
                            'fone2',
                            'email',
                            'enderecoCep',
                            'enderecoRua',
                            'enderecoNumero',
                            'enderecoBairro',
                            'enderecoCidade',
                            'enderecoEstado',
                            'isAdm',
                            'idProfessor',
                            'isAluno',
                            'ativo'
                        ];
}