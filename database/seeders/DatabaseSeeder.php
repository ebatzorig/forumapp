<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();
        \App\Models\Model\Category::factory(10)->create();
        \App\Models\Model\Question::factory(20)->create();
        // \App\Models\Model\Reply::create()->each(function($reply){
        //     return $reply->like()->save(factory(App\Models\Model\Like::class)->make());
        // });
    }
}
