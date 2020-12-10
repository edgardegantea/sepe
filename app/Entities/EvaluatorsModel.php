<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class EvaluatorsModel extends Model
{
    protected $primaryKey = 'idEvaluator';
    protected $foreingKey = 'idProject';
    protected $table = 'evaluators';
    protected $fillable = [
        'firstname' => 'required|firstname|unique:evaluators',
        'lastname' => 'required|lastname|unique:evaluators',
        'email' => 'required|email|unique:evaluators',
    ];

    public $timestamps = false;

    public function Projects()
    {
        return $this->belongsTo('App\Entities\ProjectsModel', 'idProject', 'idProject');
    }
}
