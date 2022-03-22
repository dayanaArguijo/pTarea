<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostreCFactory extends Factory
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
            'decoracion' =>$this->faker->randomElement($array = array ('tradicional','personalizada')),
            'precio'=> $this->faker->numerify('###'),
        ];
    }
}
