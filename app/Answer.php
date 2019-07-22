<?php

namespace App;

use App\Choice;
use App\Lesson;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];

    public function lesson()
    {
        return $this->belongsTo(Lesson::Class, 'lesson_id');
    }

    public function choice()
    {
        return $this->belongsTo(Choice::Class, 'answer_id');
    }
}
