<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terapeuta extends Model
{
    protected $fillable = [
        'user_id',
        'sexo',
        'titulo',
        'descricao',
        'avatar_link',
        'video_apresentacao',
    ];
}
