<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Reply;
use Faker\Generator as Faker;


$factory->define(Reply::class,function (Faker $faker) {
    return [
        //
        'body'=>$faker->text,
        'user_id'=>function(){
            $users = App\Model\User::all();
            return $users->random();
        },
        'question_id'=>function(){
            $questions = App\Model\Question::all();
            return $questions->random();
        }

    ];
});
