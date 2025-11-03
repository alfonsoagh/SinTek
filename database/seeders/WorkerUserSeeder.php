<?php
/**
 * Empresa: CETAM
 * Proyecto: ST
 * Archivo: WorkerUserSeeder.php
 * Fecha de creación: 03/11/25
 * Realizado por: Alfonso Angel García Hernández
 * Validado por: Alfonso Angel García Hernández
 */

namespace Database\Seeders;

use App\Models\User;
use App\Models\Worker;
use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WorkerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = env('WORKER_EMAIL', 'trabajador@sintek.test');
        $password = env('WORKER_PASSWORD', 'Worker2025!');

        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'first_name' => 'Juan',
                'last_name' => 'Pérez García',
                'gender' => 'M',
                'password' => Hash::make($password),
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
                'approved_at' => now(),
                'role' => 'worker',
                'curp' => 'PEGJ850315HDFRNN01',
                'budget_keys' => 'CLAVE-001, CLAVE-002',
            ]
        );

        // Ensure worker has a Worker profile
        $worker = Worker::firstOrCreate(
            ['user_id' => $user->id],
            [
                'curp' => $user->curp ?? 'PEGJ850315HDFRNN01',
                'sexo' => $user->gender === 'F' ? 'F' : 'M',
                'telefono' => '5551234567',
                'direccion' => 'Calle Principal #123, Colonia Centro',
            ]
        );

        // Create sample positions
        $claves = ['CLAVE-001', 'CLAVE-002'];
        foreach ($claves as $clave) {
            Position::firstOrCreate(
                [
                    'worker_id' => $worker->id,
                    'clave_presupuestal' => $clave,
                ],
                [
                    'plaza' => 'Plaza Ejemplo',
                    'puesto' => 'Analista',
                ]
            );
        }
    }
}
