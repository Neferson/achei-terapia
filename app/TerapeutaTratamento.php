<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerapeutaTratamento extends Model
{
    protected $fillable = [
        'terapeuta_id',
        'tratamento_id',
    ];
}
