<?php
/**
 * Empresa: CETAM
 * Proyecto: ST
 * Archivo: AllTablesSeeder.php
 * Fecha de creación: 04/11/25
 * Realizado por: Copilot
 * Validado por: Alfonso Angel García Hernández
 */

namespace Database\Seeders;

use App\Models\Position;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class AllTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workersCount = (int) env('SEED_WORKERS', 15);
        $secretariesCount = (int) env('SEED_SECRETARIES', 2);
        $positionsMin = (int) env('SEED_POSITIONS_MIN', 1);
        $positionsMax = (int) env('SEED_POSITIONS_MAX', 3);

        // Secretarios (no requieren perfil de Worker)
        if ($secretariesCount > 0) {
            User::factory($secretariesCount)
                ->state(fn () => [
                    'role' => 'secretary',
                    'approved_at' => now(),
                ])
                ->create();
        }

        // Trabajadores: User + Worker + Positions
        if ($workersCount > 0) {
            $faker = FakerFactory::create();
            User::factory($workersCount)
                ->state(fn () => [
                    'role' => 'worker',
                    'approved_at' => now(),
                ])
                ->create()
                ->each(function (User $user) use ($positionsMin, $positionsMax, $faker) {
                    $worker = Worker::factory()->for($user)->state([
                        // Alinear CURP/sexo con User cuando aplica
                        'curp' => $user->curp ?? strtoupper($faker->bothify('????######?###??')),
                        'sexo' => ($user->gender ?? 'M') === 'F' ? 'F' : 'M',
                    ])->create();

                    $positions = $faker->numberBetween($positionsMin, $positionsMax);
                    Position::factory($positions)->for($worker)->create();
                });
        }
    }
}
