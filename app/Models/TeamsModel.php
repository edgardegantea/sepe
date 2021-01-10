<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamsModel extends Model
{
    protected $primaryKey = 'id';
    protected $foreingKey = 'idProject';
    protected $foreingKey2 = 'idStudent';
    protected $foreingKey3 = 'idEvaluator';
    protected $table = 'teams';
    protected $fillable = [
        'engineering' => 'required|engineering|unique:teams',
        'semester' => 'required|semester|unique:teams',
        'idProject' => 'required|idProject|unique:teams',
        'idStudent' => 'required|idStudent|unique:teams',
        'idEvaluator' => 'required|idEvaluator|unique:teams',
    ];

    public $timestamps = false;

    public function Projects()
    {
        return $this->belongsTo('App\Models\ProjectsModel', 'id', 'idProject');
    }

    public function Students()
    {
        return $this->belongsTo('App\Models\StudentsModel', 'id', 'idStudent');
    }

    public function Evaluators()
    {
        return $this->belongsTo('App\Models\EvaluatorsModel', 'id', 'idEvaluator');
    }
}
