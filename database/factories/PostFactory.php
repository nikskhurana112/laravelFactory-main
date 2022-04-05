<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             "title" => $this->faker->text(30) ,
             "description" => $this->faker->text(255) ,
             "author" => $this->faker->firstNameMale   ,
             "user_id" => rand(70, 89)
        ];
    }
}
