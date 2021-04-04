<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'phone_id' => $faker->unique()->numberBetween(1, App\Phone::count()),
        'title'=> $faker->text(5),
        'description'=>$faker->realText(122),
        "created_at"=> now(),
        "updated_at"=> now()
    ];
});
