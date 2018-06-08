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
        'visa' => 'Visa to VietNam',
        'transportation' => 'Transportation',
        'registration' => 'Registration',
        'hanoiex' => 'Hanoi Experience',
        'aboutVn' => 'About and Around Vietnam',
        'accommodation' => 'Accommodation',
        'forumSiteInfo' => 'Forum Site Information',
        'callDeadline' => 'CALLS & DEADLINES',
        'organizingCommittee' => 'Organizing Committee'

//      'hanoi-forum' => 'Hanoi forum',
//        'hanoi-forum-2018' => 'Hanoi forum 2018',

    ];
}
