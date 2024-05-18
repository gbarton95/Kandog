<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SesionesTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        // Generar sesiones pasadas
        for ($i = 0; $i < 5; $i++) {
            DB::table('sesiones')->insert([
                'user_id' => 1,
                'perro_id' => random_int(1, 10), // Perro aleatorio
                'asunto' => 'Sesión pasada ' . ($i + 1),
                'ubicacion' => 'Ubicación ' . ($i + 1),
                'inicio' => $now->subDays($i + 1)->subHours(2), // Sesión hace $i+1 días
                'duracion' => 45,
                'done' => true,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Generar sesiones futuras
        for ($i = 0; $i < 5; $i++) {
            DB::table('sesiones')->insert([
                'user_id' => 1,
                'perro_id' => random_int(1, 10), // Perro aleatorio
                'asunto' => 'Sesión futura ' . ($i + 1),
                'ubicacion' => 'Ubicación ' . ($i + 1),
                'inicio' => $now->addDays($i + 1)->addHours(2), // Sesión dentro de $i+1 días
                'duracion' => 45,
                'done' => false,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

?>