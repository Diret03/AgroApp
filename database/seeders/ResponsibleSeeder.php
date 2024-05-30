<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponsibleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('responsibles')->insert([
            [
                'name' => 'Juan',
                'last_name' => 'Perez',
                'area' => 'Agricultura',
                'phone_number' => '123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'María',
                'last_name' => 'Gomez',
                'area' => 'Ganadería',
                'phone_number' => '987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos',
                'last_name' => 'Ramirez',
                'area' => 'Agricultura',
                'phone_number' => '555555555',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ana',
                'last_name' => 'Lopez',
                'area' => 'Ganadería',
                'phone_number' => '444444444',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luis',
                'last_name' => 'Martinez',
                'area' => 'Administración',
                'phone_number' => '333333333',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
