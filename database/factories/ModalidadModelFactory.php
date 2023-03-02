<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModalidadModel>
 */
class ModalidadModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
                'tipoModalidad'=>$this->faker->randomElement([
                    "escolarizado",
                    "semi escolarizado",
                    "virtual",
                ]),
        ];
    }
}
