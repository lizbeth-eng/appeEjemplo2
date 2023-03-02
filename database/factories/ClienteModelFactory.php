<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClienteModel>
 */
class ClienteModelFactory extends Factory
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
            'rfc' =>Str::random(13),
            'telefono'=>$this->faker->phoneNumber,
            'correo'=>$this->faker->unique()->safeEmail(),
            'dirrecion'=>$this->faker->address,
            'idProducto'=>$this->faker->numberBetween(1,20),
        ];
    }
}
