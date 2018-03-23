<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    const ADMIN = 0;
    const REVIEWER = 1;
    const PARTNER = 2;
    /**
     *
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const MALE = 2;
    const FEMALE = 1;
    const NOT_SPECIFY = 0;
    protected $fillable = [
        'name', 'email', 'password', 'type', 'phone','file',
        'first_name','last_name','title','affiliation','gender','nationality','link_cv','abstract','paper',
        'status','apply','code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
