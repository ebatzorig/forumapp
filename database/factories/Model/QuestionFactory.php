<?php

namespace Database\Factories\Model;

use App\Models\Model\Question;
use App\Models\Model\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'category_id' => function(){
                return Category::all()->random();
            },
            'user_id' => function(){
                return User::all()->random();
            }
        ];
    }
}
