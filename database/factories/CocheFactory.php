<?php

namespace Database\Factories;

use App\Models\Propietario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coche>
 */
class CocheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $propietario = Propietario::inRandomOrder()->first();

        return [
            'propietario_id' => $propietario->id,
            'nombre_propietario' => $propietario->nombre,
            'marca' => $this->faker->randomElement(['Toyota', 'Ford', 'Chevrolet', 'Honda', 'Nissan']),
            'modelo' => ucfirst($this->faker->unique()->word()), 
            'matricula' => $this->faker->regexify('[0-9]{4}[A-Z]{3}'),
        ];
    }
}
