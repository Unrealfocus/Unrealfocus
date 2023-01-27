<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class courseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name(),
            'name'=>$this->faker->name(),
            'category'=>'100 level',
            'description'=>$this->faker->sentence(),
            'last_updated'=> now(),
        ];
    }
}
