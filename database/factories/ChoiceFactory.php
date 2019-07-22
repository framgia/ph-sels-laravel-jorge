<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Choice;
use Faker\Generator as Faker;

$factory->define(Choice::class, function (Faker $faker) {
    return [
        'lesson_id' => $faker->randomDigit(),
        'name' => $faker->word()
    ];
});
