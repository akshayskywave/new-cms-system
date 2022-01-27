<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\User;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id'=>factory('app\Models\User'),
        'title'=>$faker->sentence,
        'post_image'=>$faker->imageUrl,('900','300'),
        'body'=>$faker->paragraph

    ];
});
    }
}