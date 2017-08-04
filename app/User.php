<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Pendaftaran()
    {
        return $this->HasOne('App\Pendaftaran', 'user_id', 'id');
    }

    public function Pembentukan()
    {
        return $this->hasMany('App\Pembentukan', 'user_id', 'id');
    }
}
