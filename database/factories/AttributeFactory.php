<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Attribute;
use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Attribute::class, function (Faker $faker) {
    return [
        'product_id' => function () {
            return Product::all()->random();
        },
        'price' => $faker->randomFloat(2, 0, 6),
        'color_name' => $faker->colorName,
        'color_hex' => $faker->hexColor
    ];
});
