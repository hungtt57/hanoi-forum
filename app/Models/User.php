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
        'Assoc. Prof.' =>  'Assoc. Prof.',
        'Adj. Prof.' =>  'Adj. Prof.',
        'Prof. Dr.' => 'Prof. Dr.',
        'Dr.' => 'Dr.',
        'Mrs.' => 'Mrs.',
        'Ms.' => 'Ms.',
        'Mr.' => 'Mr.'
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
    protected $fillable = [
        'name', 'email', 'password', 'type', 'phone', 'file', 'image',
        'first_name', 'last_name', 'title', 'affiliation', 'gender', 'nationality', 'link_cv', 'abstract', 'paper',
        'status', 'apply', 'code', 'reviewer_id', 'title_of_paper',
        'confirm_abstract', 'confirm_paper', 'reject_abstract', 'reject_paper', 'comment_abstract', 'comment_paper',
        'share_info', 'payment_status',
        'verify',
        'dietary','dietary_content'
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
        if($this->attributes['link_cv']) {
            return 'http://' . $this->attributes['link_cv'];
        }

        return $this->attributes['link_cv'];


    }
}
