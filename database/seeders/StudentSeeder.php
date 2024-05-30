<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Pedro',
                'last_name' => 'Gonzalez',
                'course' => 'Agricultura 101',
                'hours' => '100',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lucia',
                'last_name' => 'Fernandez',
                'course' => 'Ganadería 101',
                'hours' => '120',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jorge',
                'last_name' => 'Ruiz',
                'course' => 'Agricultura 201',
                'hours' => '150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carla',
                'last_name' => 'Mendez',
                'course' => 'Ganadería 201',
                'hours' => '130',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marta',
                'last_name' => 'Diaz',
                'course' => 'Administración 101',
                'hours' => '90',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
