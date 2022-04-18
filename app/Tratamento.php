<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamento extends Model
{
    protected $fillable = [
        'tratamento',
        'descricao',
    ];
}
