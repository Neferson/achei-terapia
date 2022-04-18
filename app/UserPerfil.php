<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserPerfil extends Model
{
    use SoftDeletes;

    protected $table = 'user_perfis';

    protected $fillable = [
        'perfil',
        'descricao'
    ];
}
