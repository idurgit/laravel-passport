<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tweet;
use Faker\Generator as Faker;

$factory->define(Tweet::class, function(Faker $faker) {
    return [
        'body' => $faker->sentence
    ];
});

class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }


}
