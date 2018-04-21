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
    const MALE = 2;
    const FEMALE = 1;
    const NOT_SPECIFY = 0;

    const WAIVED = 2;
    const PAID = 1;
    const UNPAID = 0;
    public static $paymentText  = [
        0 => 'Unpaid',
        1 => 'Paid',
        2 => 'Waived',
    ];
    protected $fillable = [
        'name', 'email', 'password', 'type', 'phone','file',
        'first_name','last_name','title','affiliation','gender','nationality','link_cv','abstract','paper',
        'status','apply','code','reviewer_id','title_of_paper',
        'confirm_abstract','confirm_paper','reject_abstract','reject_paper','comment_abstract','comment_paper',
        'share_info','payment_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
