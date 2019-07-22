<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    // $lessons = factory(Lessons::Class)->make();

    return [
        'title' => $faker->realText($faker->numberBetween(10,30)),
        'description' => $faker->realText($faker->numberBetween(100,300))
    ];
});
