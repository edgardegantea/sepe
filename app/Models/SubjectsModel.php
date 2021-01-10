<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectsModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'subjects';
    protected $fillable = [
        'name' => 'required|name|unique:subjects',
        'teacher' => 'required|teacher|unique:subjects',
    ];

    public $timestamps = false;

}
