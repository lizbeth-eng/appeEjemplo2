<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlumnoModel>
 */
class AlumnoModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'apellidoPaterno'=>$this->faker->firstname,
            'apellidoMaterno'=>$this->faker->lastname,
            'numeroControl'=>$this->faker->bothify,
           'idModalidad'=>$this->faker->numberBetween(1,20),
        ];
    }
    }

