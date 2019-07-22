<?php

use App\Course;
use App\Lesson;
use App\Choice;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Course::Class,20)->create()->each(function($course) {
            $rand = rand(5,20);
            for($i=0; $i < $rand; $i++) {
                $lesson = factory(Lesson::Class)->create(['course_id' => $course]);
                $choice = factory(Choice::Class,4)->create(['lesson_id' => $lesson]);

                $lesson->correct_choice_id = $choice[rand(0,3)]->id;

                $lesson->save();
            }
        });
    }
}
