<?php

namespace Database\Factories\Model;

use App\Models\User;
use App\Models\Model\Like;
use App\Models\Model\Reply;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class LikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Like::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reply_id' => function(){
                return Reply::all()->random();
            },
            'user_id' => funtion(){
                return User::all()->random();
            }
        ];
    }
}
