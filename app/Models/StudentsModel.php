<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentsModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'students';
    protected $fillable = [
        'firstName' => 'required|firstName|unique:students',
        'lastName' => 'required|lastName|unique:students',
        'semester' => 'required|semester|unique:students',
        'engineering' => 'required|engineering|unique:students',
        'controlNumber' => 'required|controlNumber|unique:students',
        'email' => 'required|email|unique:students',
    ];

    public $timestamps = false;
}
