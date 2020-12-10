<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectsModel extends Model
{
    protected $primaryKey = 'idProject';
    protected $table = 'Projects';
    protected $fillable = [
        'name' => 'required|name|unique:Projects',
        'dateRegistration' => 'required|dateRegistration|unique:Projects',
        'semester' => 'required|semester|unique:Projects',
    ];

    public $timestamps = false;

}
