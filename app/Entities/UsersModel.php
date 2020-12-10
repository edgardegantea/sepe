<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $primaryKey = 'id_Users';
    protected $foreingKey = 'id_Profiles';
    protected $table = 'Users';
    protected $fillable = [
        'firstname',
        'lastname',
        'id_Profiles',
    ];

    public $timestamps = false;

    public function Profiles()
    {
        return $this->belongsTo('App\Entities\ProfilesModel', 'id_Profiles', 'id_Profiles');
    }

}
