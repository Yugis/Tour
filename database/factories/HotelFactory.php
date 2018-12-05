<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'rating' => $faker->numberBetween($min = 1, $max = 5),
        'price' => mt_rand(100, 10000),
        'description' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        // 'image' => 'images/hotel-' . rand(1, 9) . '.jpg',
        'category_id' => function () {
        	return App\Category::all()->random()->id;
        },
        'location_id' => function () {
        	return App\Location::all()->random()->id;
        }
    ];
});
