<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phone;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1, App\User::count()),
        'phone'=> $faker->phoneNumber(),
        "created_at"=> now(),
        "updated_at"=> now()
    ];
});
