<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachersModel extends Model
{
    protected $primaryKey = 'id';
    protected $foreingKey = 'idProject';
    protected $table = 'teachers';
    protected $fillable = [
        'firstName' => 'required|firstName|unique:teachers',
        'lastName' => 'required|lastName|unique:teachers',
        'controlNumber' => 'required|controlNumber|unique:teachers',
        'email' => 'required|email|unique:teachers',
    ];

    public $timestamps = false;

    public function Projects()
    {
        return $this->belongsTo('ProjectsModel', 'idProject', 'idProject');
    }

    function projects1()
    {
        return $this->hasOne('ProjectsModel', 'idProject');
    }

}
