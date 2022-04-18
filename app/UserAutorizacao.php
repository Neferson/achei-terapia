<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAutorizacao extends Model
{
    protected $fillable = [
        'user_perfil_id',
        'permissao'
    ];
}
