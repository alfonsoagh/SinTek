<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerFactory extends Factory
{
    protected $model = Worker::class;

    public function definition(): array
    {
        // Default: create a related user if none is provided via state/for()
        return [
            'user_id' => User::factory(),
            'curp' => strtoupper($this->faker->bothify('????######?###??')),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'telefono' => $this->faker->numerify('55########'),
            'direccion' => $this->faker->address(),
        ];
    }
}
