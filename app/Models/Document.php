<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $fillable = ['reviewer_id','abstract','title_of_paper','paper','user_id','subcommittee_id'];
    public $table = 'documents';
}
