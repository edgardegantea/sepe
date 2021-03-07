<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'criterio',
        'valor',
        'relevancia',
        'comentario',
        'project_id'
    ];

    //relacion inversa 1 a muchos

    public function project()
    {
        return $this->belongsTo(Project::class);
    }


}
