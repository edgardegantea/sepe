<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvaluatorsModel extends Model
{
    //protected $primaryKey = 'id';
    //protected $foreingKey = 'idProject';
    protected $table = 'evaluators';
    protected $fillable = [
        'firstName' => 'required|firstName|unique:evaluators',
        'lastName' => 'required|lastName|unique:evaluators',
        'email' => 'required|email|unique:evaluators',
    ];

    //public $timestamps = false;


}
