<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['content', 'title', 'user_id', 'status','meta_description','meta_keyword','meta_keyword'];
    public $table = 'posts';
}
