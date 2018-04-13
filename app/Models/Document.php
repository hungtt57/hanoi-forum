<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $fillable = ['reviewer_id','abstract','title_of_paper','paper','user_id','subcommittee_id'];
    public $table = 'documents';
    public function reviewer() {
        return $this->hasOne(User::class,'id','reviewer_id');
    }
    public function participant() {
        return $this->hasOne(User::class,'id','user_id');
    }
      public function subcommittee() {
        return $this->hasOne(Subcommittee::class,'id','subcommittee_id');
    }

}
