<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Propietario>
 */
class PropietarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dniNumber = $this->faker->unique()->numerify('########');
        $dniLetter = strtoupper($this->faker->randomLetter()); // Genera una letra aleatoria en mayúsculas
    
        return [
            'nombre' => $this->faker->name(),
            'dni' => $dniNumber . $dniLetter,
        ];
    }
}
