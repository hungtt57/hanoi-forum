<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailLog extends Model
{
    public $fillable = ['to','event','status','data'];
    public $table = 'email_log';
    protected $casts = [
        'data' => 'array',
    ];
}
