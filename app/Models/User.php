<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**Relacion de 1:n de usuario-
    public function relacionUserAspecto(){
        return $this->hasMany(Aspecto::class);
    }*/
    public function relacionUserEvaluation(){
        return $this->hasMany(Evaluation::class);
    }

    public function relacionUserStructure(){
        return $this->hasMany(Structure::class);
    }
    public function relacionUserLayoutPage(){
        return $this->hasMany(Layoutpage::class);
    }
    public function relacionUserControl(){
        return $this->hasMany(Control::class);
    }
    public function relacionUserSearch(){
        return $this->hasMany(Search::class);
    }

}
