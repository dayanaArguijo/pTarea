<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostreTFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombrePostre' => $this->faker->Name,
            'tamaño' =>$this->faker->randomElement($array = array ('G','M', 'P')),
            'tipoRelleno' =>$this->faker->randomElement($array = array ('caramelo','bettun')),
            'precio'=> $this->faker->numerify('###'), 
        ];
    }
}
