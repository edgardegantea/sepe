<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'semester',
        'description'
    ];

    /** Relacion 1:1 de Project a Aspecto

    public function relacionAspectoProyecto(){
        return $this->hasOne(Aspecto::class);
    }*/

}
