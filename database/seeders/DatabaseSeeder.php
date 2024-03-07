<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Database\Factories\CardFactory;
use Database\Factories\CoffeFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // run database seedder 'php artisan db:seed'
        $carfactory = new CardFactory();
        $serFactory = new UserFactory();

        for ($i = 0; $i < 10; ++$i) {
            DB::table('users')->insert($serFactory->definition());
            DB::table('cards')->insert($carfactory->definition());
            DB::table('coffe')->insert(CoffeFactory::definition());
        }
    }
}
