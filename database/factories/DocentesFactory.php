<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DocentesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'titulo_universitario' => $this->faker->randomElement([10, 20, 30, 40, 50, 60, 70, 80, 90]),
            'edad' => $this->faker->word(),
            'fecha_contrato' => $this->faker->date('Y-m-d'),
            'foto' => $this->faker->word(),
            'doc_identidad' => $this->faker->word()
        ];
    }
}
