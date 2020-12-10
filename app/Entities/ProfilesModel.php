<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ProfilesModel extends Model
{
    protected $primaryKey = 'id_Profiles';
    protected $table = 'Profiles';
    protected $fillable = [
        'name',
        'description',
        'permissions',
    ];

    public $timestamps = false;

}
