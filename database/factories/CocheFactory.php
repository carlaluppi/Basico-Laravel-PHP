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
        return [
            'propietario_id' => Propietario::inRandomOrder()->first()->id,
            'nombre_propietario'=>$this ->faker->name(),
            'marca' => $this->faker->randomElement(['Toyota', 'Ford', 'Chevrolet', 'Honda', 'Nissan']),
            'modelo' => ucfirst($this->faker->unique()->word()), 
            'matricula' => $this->faker->regexify('[0-9]{4}[A-Z]{3}'), 
        ];
    }
}
