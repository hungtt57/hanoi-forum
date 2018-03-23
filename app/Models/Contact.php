<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable = ['first_name','sur_name','title','email','code','issue','subject','question','status'];
    public $table = 'contacts';
}
