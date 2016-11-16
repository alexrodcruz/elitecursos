<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{
    protected $table = 'assunto';

    protected $fillable = [
                            'descricao',
                            'idDisciplina',
                            'sumario'
                        ];
}