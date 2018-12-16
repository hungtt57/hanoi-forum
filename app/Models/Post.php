<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['content','content_en', 'title', 'user_id', 'status','meta_description','meta_title','meta_keyword','image'];
    public $table = 'posts';
}
