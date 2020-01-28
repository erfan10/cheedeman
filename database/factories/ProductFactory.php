<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => function () {
            return Category::all()->random();
        },
        'name' => $faker->sentence,
        'stock' => $faker->randomDigit,
        'details' => "{}",
        'thumbnail' => $faker->imageUrl(640, 480),
        'discount' => $faker->numberBetween(0, 100)
    ];
});
