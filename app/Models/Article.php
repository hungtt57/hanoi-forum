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
        'organizingCommittee' => 'Organizing Committee',
        'steering' => 'Steering Committee',
        'climateChangeEviden' => 'CLIMATE CHANGE EVIDENCE AND SECURITY',
        'climateChangeResponse' => 'Climate change response',
        'humanImpactsOnClimateChange' => 'Human impacts on Climate Change',
        'policyAndGovernance' => 'Policy and governance of climate change response and sustainability',
        'scienceTechnology' => 'Science, technology and education for climate change response and sustainability',
        'policy1' => 'Policy Dialogue 1: Sustainable development of Mekong Delta responding to Climate change',
        'policy2' => 'Policy Dialogue 2: Building Resilient, safe and sustainable cities in Red River delta (Hanoi City, Vinh Phuc City, Hai Phong city)',

//      'hanoi-forum' => 'Hanoi forum',
//        'hanoi-forum-2018' => 'Hanoi forum 2018',

    ];
}
