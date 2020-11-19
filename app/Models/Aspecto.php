<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspecto extends Model
{
    use HasFactory;

    //protected $table='aspectos';
    protected $fillable = [
        'codigo',
        'criterio',
        'valor',
        'relevancia',
        'comentario'
    ];

    /**public function RelacionAspectoProyecto(){
        return $this->belongsTo(Project::class);
    }*/
}
