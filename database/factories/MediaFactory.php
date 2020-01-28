<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Media;
use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Media::class, function (Faker $faker) {
    return [
        'product_id' => function () {
            return Product::all()->random();
        },
        'source' => $faker->imageUrl(400, 400)
    ];
});
