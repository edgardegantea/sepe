<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilesModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'Profiles';
    protected $fillable = [
        'name',
        'description',
        'permissions',
    ];

    public $timestamps = false;

}
