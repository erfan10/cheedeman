<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'parent_id' => function () {
            return (rand(0, 1)) ? Category::all()->random() : 0;
        },
        'name' => $faker->word,
        'icon' => $faker->imageUrl(70, 70),
        'details_structure' => '{}',
        'score_structure' => '{}'
    ];
});
