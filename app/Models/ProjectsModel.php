<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectsModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'projects';
    protected $fillable = [
        'name' => 'required|name|unique:Projects',
        //'dateRegistration'  => 'required|dateRegistration|unique:Projects',
        'semester' => 'required|semester|unique:Projects',
    ];

    public $timestamps = false;

}
