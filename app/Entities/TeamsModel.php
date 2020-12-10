<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class TeamsModel extends Model
{
    protected $primaryKey = 'idTeam';
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
        return $this->belongsTo('App\Entities\ProjectsModel', 'idProject', 'idProject');
    }

    public function Students()
    {
        return $this->belongsTo('App\Entities\StudentsModel', 'idStudent', 'idStudent');
    }

    public function Evaluators()
    {
        return $this->belongsTo('App\Entities\EvaluatorsModel', 'idEvaluator', 'idEvaluator');
    }
}
