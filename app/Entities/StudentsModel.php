<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class StudentsModel extends Model
{
    protected $primaryKey = 'idStudent';
    protected $table = 'students';
    protected $fillable = [
        'firstname' => 'required|firstname|unique:students',
        'lastname' => 'required|lastname|unique:students',
        'semester' => 'required|semester|unique:students',
        'engineering' => 'required|engineering|unique:students',
        'controlNumber' => 'required|controlNumber|unique:students',
        'email' => 'required|email|unique:students',
    ];

    public $timestamps = false;
}
