<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warehouses = [
            [
                'name' => 'Алматы',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Петропавловск',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Караганда',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Warehouse::insert($warehouses);
    }
}
