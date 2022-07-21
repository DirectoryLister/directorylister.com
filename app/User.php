<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /** The attributes that are mass assignable. */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /** The attributes that should be hidden for arrays. */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /** The attributes that should be cast to native types. */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
