<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    const ADMIN = 0;
    const REVIEWER = 1;
    const PARTNER = 2;
    /**
     *
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public static $titleText = [
        'Prof.' => 'Prof.',
        'Assist. Prof.' => 'Assist. Prof.',
        'Assoc. Prof.' => 'Assoc. Prof.',
        'Adj. Prof.' => 'Adj. Prof.',
        'Prof. Dr.' => 'Prof. Dr.',
        'Dr.' => 'Dr.',
        'Mrs.' => 'Mrs.',
        'Ms.' => 'Ms.',
        'Mr.' => 'Mr.'
    ];
    public static $room = [
        0 => 'Double room',
        1 => 'Twin room',
        2 => 'Smoking room',
        3 => 'Non-smoking room',
        4 => 'None',

    ];
    public static $dietaryText = [
        0 => 'None',
        1 => 'Vegetarian',
        2 => 'Vegan',
        3 => 'Halal food',
        4 => 'Others (Please specify):'
    ];

    public static $indicateText = [
        0 => 'None',
        1 => 'Wheelchair',
        2 => 'Hearing aid',
        3 => 'A sighted guide',
        4 => 'Others (Please specify):'
    ];

    const MALE = 2;
    const FEMALE = 1;
    const NOT_SPECIFY = 0;

    const WAIVED = 2;
    const PAID = 1;
    const UNPAID = 0;
    public static $paymentText = [
        0 => 'Unpaid',
        1 => 'Paid',
        2 => 'Waived',
    ];

    public static $kindSupportText = [
        0 => 'Flight tickets',
        1 => 'Accommodation',
        2 => 'Flight tickets and accommodation'
    ];
    public static $knowText = [
    0 => 'Conference alert',
    1 => 'Vietnam National University, Hanoi (VNU) website',
    2 => 'Korea Foundation for Advanced Studies (KFAS)',
    3 => 'Group/network emails',
    4 => 'Friends and/or colleagues',
    5 => 'Your organization’s website',
    6 => 'Your department/faculty',
    7 => 'Others'
];
    public static $panelText = [

        1 => 'Panel 1: Climate change evidence and security',
        2 => 'Panel 2: Human impacts on climate change',
        3 => 'Panel 3: Climate change response',
        4 => 'Panel 4: Policy and governance of climate change response and sustainability',
        5 => 'Panel 5: Science, technology and education for climate change response and sustainability',
        6 => 'Policy Dialogue 1: Sustainable development of Mekong Delta responding to Climate change',
        7 => 'Policy Dialogue 2: Building Resilient, safe and sustainable cities in Red River delta (Hanoi City, Vinh Phuc City, Hai Phong city)'
    ];
    protected $fillable = [
        'name', 'email', 'password', 'type', 'phone', 'file', 'image',
        'first_name', 'last_name', 'title', 'affiliation', 'gender', 'nationality', 'link_cv', 'abstract', 'paper',
        'status', 'apply', 'code', 'reviewer_id',
        'confirm_abstract', 'confirm_paper', 'reject_abstract', 'reject_paper', 'comment_abstract', 'comment_paper',
        'share_info', 'payment_status',
        'verify',
        'dietary', 'dietary_content',
        'need_support', 'kind_support',
        'indicate', 'indicate_content','know',
        'confirm',

        'title_of_paper',
        'abstract_panel',
        'title_of_full_paper',
        'paper_panel',
        'send_email_abstract',
        'title_abstract',
        'title_paper',
        'panel_of_abstract',
        'panel_of_paper',
        'code_password',
        'pdf_cv'

    ];
    protected $casts = [
        'know' => 'array',
        'indicate' => 'array',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getLinkCvAttribute()
    {
//        if (env('USE_LOCAL_IMAGE')) {
//            if (!empty($this->attributes['local_image'])) {
//                return $this->attributes['local_image'];
//            }
//        }

        if (str_contains($this->attributes['link_cv'], 'http') || str_contains($this->attributes['link_cv'], 'https')) {
            return $this->attributes['link_cv'];
        }
        if ($this->attributes['link_cv']) {
            return 'http://' . $this->attributes['link_cv'];
        }

        return $this->attributes['link_cv'];


    }
}
