<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protectes protected $fillable = [
        'name',
        'descripcion',
        'desarrollador',
        'semestre',
        'asesor'
    ];
}
