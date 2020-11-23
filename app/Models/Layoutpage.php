<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layoutpage extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'criterio',
        'valor',
        'relevancia',
        'comentario'
    ];
}
