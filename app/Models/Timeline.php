<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    public $fillable = ['start_date','end_date','name'];
    public $table = 'timelines';
}
