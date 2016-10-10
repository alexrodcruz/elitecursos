<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
                            'NOME',
                            'SEXO',
                            'DATANASCIMENTO',
                            'ESTADOCIVIL',
                            'CPF',
                            'RG',
                            'ORGAOEMISSOR',
                            'FONE1',
                            'FONE2',
                            'EMAIL',
                            'ENDERECOCEP',
                            'ENDERECORUA',
                            'ENDERECONUMERO',
                            'ENDERECOBAIRRO',
                            'ENDERECOCIDADE',
                            'ENDERECOESTADO',
                            'ATIVO'
                        ];
}