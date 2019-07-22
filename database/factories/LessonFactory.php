<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'course_id' => $faker->randomDigit(),
        'correct_choice_id' => $faker->randomDigit(),
        'word' => $faker->word()
    ];
});
