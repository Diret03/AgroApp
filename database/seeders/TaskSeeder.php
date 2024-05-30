<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
                'name' => 'Preparar terreno para maíz',
                'start_date' => '2024-06-01',
                'end_date' => '2024-06-15',
                'progress_percentage' => 0,
                'project_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plantar semillas de maíz',
                'start_date' => '2024-06-16',
                'end_date' => '2024-06-30',
                'progress_percentage' => 0,
                'project_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Construir establo para ganado',
                'start_date' => '2024-01-01',
                'end_date' => '2024-02-01',
                'progress_percentage' => 50,
                'project_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Controlar la salud del ganado',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'progress_percentage' => 30,
                'project_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Construcción de invernadero para tomates',
                'start_date' => '2024-03-01',
                'end_date' => '2024-04-01',
                'progress_percentage' => 10,
                'project_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
