<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'name' => 'Cultivo de Maíz',
                'description' => 'Proyecto de cultivo de maíz en 5 hectáreas.',
                'start_date' => '2024-06-01',
                'end_date' => '2024-12-01',
                'status' => 'initiated',
                'progress_percentage' => 0,
                'responsible_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cría de Ganado',
                'description' => 'Proyecto de cría de ganado bovino.',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'status' => 'in_progress',
                'progress_percentage' => 30,
                'responsible_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cultivo de Tomates',
                'description' => 'Proyecto de cultivo de tomates en invernadero.',
                'start_date' => '2024-03-01',
                'end_date' => '2024-09-01',
                'status' => 'initiated',
                'progress_percentage' => 10,
                'responsible_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Producción de Leche',
                'description' => 'Proyecto de producción de leche con ganado vacuno.',
                'start_date' => '2024-02-01',
                'end_date' => '2024-12-01',
                'status' => 'in_progress',
                'progress_percentage' => 20,
                'responsible_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mantenimiento de Equipos',
                'description' => 'Proyecto de mantenimiento de equipos agrícolas y ganaderos.',
                'start_date' => '2024-05-01',
                'end_date' => '2024-11-01',
                'status' => 'initiated',
                'progress_percentage' => 5,
                'responsible_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
