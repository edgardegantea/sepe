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
        'logo',
        'status',
        'percentage',
        'usability',
        'subject_id',
        'team_id'
    ];

    //Relacion muchos a muchos con usuarios
    //relacion muchos a muchos
    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    //Relacion 1 a muchos inversa
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    //Ver usuarios a traves de teams


    //Relacion 1:n de Project a modulos de evaluación

    public function aspecto()
    {
        return $this->hasMany(Aspecto::class);
    }

    public function ayuda()
    {
        return $this->hasMany(Ayuda::class);
    }

    public function control()
    {
        return $this->hasMany(Control::class);
    }

    public function element()
    {
        return $this->hasMany(Element::class);
    }

    public function identity()
    {
        return $this->hasMany(Identity::class);
    }

    public function interaction()
    {
        return $this->hasMany(Interaction::class);
    }

    public function layoutpage()
    {
        return $this->hasMany(Layoutpage::class);
    }

    public function rotulado()
    {
        return $this->hasMany(Rotulado::class);
    }

    public function search()
    {
        return $this->hasMany(Search::class);
    }

    public function structure()
    {
        return $this->hasMany(Structure::class);
    }

}
