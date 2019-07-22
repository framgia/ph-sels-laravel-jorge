<?php

namespace App;

use App\User;
use App\Answer;
use App\Course;
use App\Result;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    protected $fillable = [
        'owner_id', 'course_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::Class, 'owner_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::Class, 'course_id');
    }

    public function result()
    {
        return $this->hasOne(Result::Class, 'user_course_id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::Class, 'user_course_id');
    }
}
