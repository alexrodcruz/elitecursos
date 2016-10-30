<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucional extends Model
{
    protected $table = 'institucional';

    protected $fillable = [
                            'descricao',
                            'conteudo'
                        ];
}