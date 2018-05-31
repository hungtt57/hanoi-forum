<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'type', 'phone'
    ];
    public static $titleText = [
        'Prof' => 'Prof',
        'Dr' => 'Dr',
        'Mrs' => 'Mrs',
        'Ms' => 'Ms',
        'Mr' => 'Mr'
    ];
}
