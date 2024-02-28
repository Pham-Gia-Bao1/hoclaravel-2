<?php

namespace Database\factories;

class CoffeFactory
{

    public static function definition()
    {
        $faker = \Faker\Factory::create(); // Add this line to create an instance of Faker
//        create random data
        return [
            'name' => 'Coffe '.$faker->word,
            'size' => $faker->randomElement(['Small', 'Medium', 'Large']),
            'weight' => $faker->numberBetween(100, 500) . 'g',
            'price' => $faker->randomFloat(2, 1, 10),
            'images' => json_encode(['item-' . $faker->numberBetween(1, 5) . '.png']),
            'reviews' => $faker->sentence,
            'rating' => $faker->randomFloat(1, 1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

}
