<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsModel extends Model
{
    use HasFactory;

    //protected $primaryKey = 'id';


    protected $fillable = [
        'name',// => 'required|name|unique:Projects',
        //'dateRegistration'  => 'required|dateRegistration|unique:Projects',
        'semester', //=> 'required|semester|unique:Projects',
        'description',
        //'system'
    ];

    //public $timestamps = false;
}
