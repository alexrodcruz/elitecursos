<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matricula';

    protected $fillable = [
                            'idAluno',
                            'idTurma'
                        ];
}