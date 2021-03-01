<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'semester',
        'engineer_id',
        'subject_id'
    ];

    /** Relacion 1:1 de Project a Aspecto

    public function relacionAspectoProyecto(){
        return $this->hasOne(Aspecto::class);
    }*/

    //Obtener carreras por FK
    public function carrera(){
        return $this->belongsTo(Engineer::class);
    }

    //Obtener materias por FK
    public function materia(){
        return $this->belongsTo(Subject::class);
    }



}
