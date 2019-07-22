<?php

namespace App;

use App\Choice;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    function choices() {
        return $this->hasMany(Choice::Class,'lesson_id');
    }
}
