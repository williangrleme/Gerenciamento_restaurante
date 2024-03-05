<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conta>
 */
class ContaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantPessoas' => $this->faker->numberBetween(1, 10),
            'valorTotal' => $this->faker->randomFloat(2, 10, 500),
            'valorRestante' => $this->faker->randomFloat(2, 0, 500), 
            'cliente_id' => function () {
                return \App\Models\Cliente::factory()->create()->id;
            }
        ];
    }
}
