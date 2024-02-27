<?php

namespace Database\factories;

class CoffeFactory
{

    public static function definition()
    {
        $faker = \Faker\Factory::create(); // Add this line to create an instance of Faker
//        create random data
        return [
            'name' => $faker->word,
            'size' => $faker->randomElement(['Small', 'Medium', 'Large']),
            'weight' => $faker->numberBetween(100, 500) . 'g',
            'price' => $faker->randomFloat(2, 1, 10),
            'images' => json_encode([$faker->imageUrl(), $faker->imageUrl()]),
            'reviews' => $faker->sentence,
            'rating' => $faker->randomFloat(1, 1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

}
