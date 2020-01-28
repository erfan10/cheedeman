<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Comment;
use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'product_id' => function () {
            return Product::all()->random();
        },
        'score' => '{}',
        'title' => $faker->sentence,
        'caption' => $faker->paragraph,
        'weakness' => '{}',
        'strength' => '{}'
    ];
});
