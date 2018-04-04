<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $fillable = ['image','name','order'];
    public $table = 'banner';
}
