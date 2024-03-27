<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                'name' => 'Алматы',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Актау',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Шымкент',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        City::insert($cities);
    }
}
