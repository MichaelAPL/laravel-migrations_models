<?php
use App\Tag;
use App\Review;
use App\Product;
use App\Salesman;
use App\Direction;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomFloat(2, 1, 1000),
        'description' => $faker->text()
    ];
});

$factory->define(App\Review::class, function (Faker\Generator $faker) {
    return [
        'author' => $faker->name,
        'title' => $faker->word,
        'content' => $faker->text(),
        'date'=>$faker->date($format = 'Y-m-d', $max = 'now')
    ];
});

$factory->define(App\Salesman::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->name
    ];
});

$factory->define(App\Direction::class, function (Faker\Generator $faker) {
    return [
        'adress' => $faker->streetAddress,
        'city' => $faker->city,
        'region' => $faker->state,
        'country'=>$faker->country,
        'postal_code'=>$faker->postcode
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word
    ];
});
