<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $fillable = ['content', 'title'];
    public $table = 'articles';

    public static $typeText = [
        'faq' => 'FAQs',
        'forum-program' => 'Forum Program',
//      'hanoi-forum' => 'Hanoi forum',
//        'hanoi-forum-2018' => 'Hanoi forum 2018',

    ];
}
