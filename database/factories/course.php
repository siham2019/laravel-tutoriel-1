<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        
        'details'=>$faker->realText(122),
        "created_at"=> now(),
    ];
});
