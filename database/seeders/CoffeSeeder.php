<?php

namespace Database\Seeders;

use Database\Factories\CoffeFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for seeding
//        insert data in table
        $coffees = [
            [
                'name' => 'Americano',
                'size' => 'Medium',
                'weight' => '250g',
                'price' => 3.99,
                'images' => json_encode(['item-1.png', 'item-2.png', 'item-3.png', 'item-4.png', 'item-5.png']),
                'reviews' => 'Good coffee, nice flavor',
                'rating' => '4.5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample data as needed
        ];

        // Use the factory to create 10 sample records
        for ($i = 0; $i < 3; ++$i) {
            DB::table('coffe')->insert(CoffeFactory::definition());
        }
    }
}
