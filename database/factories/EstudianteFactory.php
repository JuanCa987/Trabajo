<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tipo_documento' => $this->faker->randomElement(['CC', 'TI', 'CE']),
            'num_documento' => $this->faker->randomElement([123456]),
            'documento_identidad' => $this->faker->word(),
            'fecha_expedicion' => $this->faker->date(),
            'nombre' => $this->faker->name(),
            'primer_apellido' => $this->faker->lastName(),
            'segundo_apellido' => $this->faker->lastName(),
            'genero' => $this->faker->randomElement(['M', 'F']),
            'fecha_nacimiento' => $this->faker->date(),
            'estrato' => $this->faker->randomElement([1, 2, 3, 4, 5, 6])
        ];
    }
}
