<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => $faker->numberBetween(1, App\Post::count()),
        'text'=>$faker->realText(122),
        'user_id' => $faker->unique()->numberBetween(1, App\User::count()),
        "created_at"=> now(),
        "updated_at"=> now()
    ];
});
