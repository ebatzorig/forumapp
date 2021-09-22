<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Database\Seeders\factory;

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
        \App\Models\Model\Reply::factory()->count(30)->create()->each(function($reply){
            return $reply->factory(Like::class)->make();
        });
    }
}
