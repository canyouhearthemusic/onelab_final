<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\UserRole;
use App\Models\Card;
use App\Models\City;
use App\Models\Order;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            CardSeeder::class,
            WarehouseSeeder::class,
            StatusSeeder::class,
        ]);

        foreach (range(0,10) as $i) {
            Order::create([
                'warehouse_id' => Warehouse::select('id')->inRandomOrder()->first()->id,
                'city_id' => City::select('id')->inRandomOrder()->first()->id,
                'card_id' => Card::select('id')->inRandomOrder()->first()->id,
                'pieces' => random_int(100,1000),
            ]);
        }

        \App\Models\User::factory()->create([
            'role' => UserRole::ADMIN->value,
            'name' => 'Alibek Tastan',
            'email' => 'admin@example.com',
            'password' => 'asd123asd',
        ]);
    }
}
