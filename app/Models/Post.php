<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['content', 'content_en', 'title', 'user_id', 'status', 'meta_description', 'meta_title', 'meta_keyword', 'image'];
    public $table = 'posts';

    public function getTitleAttribute()
    {

        $raw_locale = \Session::get('locale');

        if ($raw_locale != null and $raw_locale == 'vn') {
            return $this->attributes['title'];
        }
        return $this->attributes['meta_title'];

    }

    public function getContentAttribute()
    {

        $raw_locale = \Session::get('locale');

        if ($raw_locale != null and $raw_locale == 'vn') {
            return $this->attributes['content'];
        }
        return $this->attributes['content_en'];

    }
}
