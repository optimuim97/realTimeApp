<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use App\Model\Question;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [
        //
        'title' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text,
        'user_id' => function () {
            return User::all()->random();
        },
        'category_id' => function () {
            return Category::all()->random();
        }

    ];
});
