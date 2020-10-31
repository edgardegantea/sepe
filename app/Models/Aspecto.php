<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'valor',
        'relevancia',
        'comentario',
        'valor_interno',
        'valor_interno_relevancia',
        'factor_correcion',
        'valor_parcial',
        'valor_parcial2'
    ];
}
