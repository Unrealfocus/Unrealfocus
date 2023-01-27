<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class questionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question'=>$this->faker->sentence(),
            'explanation'=>$this->faker->text(),
            'optionA'=>$this->faker->realTextBetween($minNbChars=20,$maxNbChar=50),
            'optionB'=>$this->faker->realTextBetween($minNbChars=20,$maxNbChar=50),
            'optionC'=>$this->faker->realTextBetween($minNbChars=20,$maxNbChar=50),
            'optionD'=>$this->faker->realTextBetween($minNbChars=20,$maxNbChar=50),
            'course_id'=>1,
        ];
    }
}
