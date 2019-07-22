<?php

namespace App;

use App\UserCourse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    function lessons() {
        return $this->hasMany(Lesson::Class, 'course_id');
    }

    function is_taken() {
        $userCourse = UserCourse::where('course_id', $this->id)->where('owner_id', Auth::user()->id)->count();
        return ($userCourse > 0)? true : false;
    }
}
