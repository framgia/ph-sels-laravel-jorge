<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $guarded = [];

    public function userCourse()
    {
        return $this->belongsTo(UserCourse::Class, 'user_course_id');
    }
}
