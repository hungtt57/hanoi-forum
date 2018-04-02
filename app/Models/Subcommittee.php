<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcommittee extends Model
{
    public $fillable = ['name','description'];
    public $table = 'subcommittee';
}
