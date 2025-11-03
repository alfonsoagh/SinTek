<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = env('ADMIN_EMAIL', 'admin@sintek.test');
        $password = env('ADMIN_PASSWORD', 'SinTek2025!');

        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'first_name' => 'Admin',
                'last_name' => 'Principal',
                'gender' => 'M',
                'password' => Hash::make($password),
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
                'approved_at' => now(),
                'role' => 'admin',
                'curp' => 'ADMN000000HXXX0001',
                'budget_keys' => null,
            ]
        );

        // Ensure admin has a Worker profile
        Worker::firstOrCreate(
            ['user_id' => $user->id],
            [
                'curp' => $user->curp ?? 'ADMN000000HXXX0001',
                'sexo' => $user->gender === 'F' ? 'F' : 'M',
            ]
        );
    }
}
