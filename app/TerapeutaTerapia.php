<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerapeutaTerapia extends Model
{
    protected $fillable = [
        'terapeuta_id',
        'terapia_id',
    ];
}
