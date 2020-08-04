<?php

use App\Model\Category;
use App\Model\Like;
use App\Model\Question;
use App\Model\Reply;
use App\Model\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 10)->create();
        factory(Category::class, 10)->create();
        factory(Question::class, 10)->create();
        factory(Reply::class, 10)->create()->each(
            function ($reply){
                return $reply->likes()->save( factory(Like::class)->make());
            }
        );
        // factory(like::class, 10)->create();
    }
}
