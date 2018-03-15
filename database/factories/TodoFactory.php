<?php

use Faker\Generator as Faker;

$factory->define(\App\Todo::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraph(2),
        'summary' => $faker->paragraph(1)
    ];
});
