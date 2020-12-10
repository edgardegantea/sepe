<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class TeachersModel extends Model
{
    protected $primaryKey = 'idTeacher';
    protected $foreingKey = 'idProject';
    protected $table = 'teachers';
    protected $fillable = [
        'firstname' => 'required|firstname|unique:teachers',
        'lastname' => 'required|lastname|unique:teachers',
        'controlNumber' => 'required|controlNumber|unique:teachers',
        'email' => 'required|email|unique:teachers',
    ];

    public $timestamps = false;

    public function Projects()
    {
        return $this->belongsTo('App\Entities\ProjectsModel', 'idProject', 'idProject');
    }

    function projects1()
    {
        return $this->hasOne('ProjectsModel', 'idProject');
    }

}
