<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(200)->create();
        OrderStatus::query()->insert(
            [
                [
                    'order_status' => 'Active',
                    'is_active' => true
                ],
                [
                    'order_status' => 'Cancelled',
                    'is_active' => true
                ]
            ]
        );
        Order::factory(10000)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
