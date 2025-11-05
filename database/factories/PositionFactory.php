<?php

namespace Database\Factories;

use App\Models\Position;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PositionFactory extends Factory
{
    protected $model = Position::class;

    public function definition(): array
    {
        return [
            'worker_id' => Worker::factory(),
            'clave_presupuestal' => 'CLAVE-' . strtoupper($this->faker->bothify('####-??')),
            'plaza' => 'Plaza ' . $this->faker->citySuffix(),
            'puesto' => $this->faker->jobTitle(),
        ];
    }
}
