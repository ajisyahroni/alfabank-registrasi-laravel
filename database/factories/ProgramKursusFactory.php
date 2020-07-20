<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProgramKursus;
use Faker\Generator as Faker;

$factory->define(ProgramKursus::class, function (Faker $faker) {
    return [
        'nama' => $faker->name(),
        'masa_studi' => $faker->numberBetween(1, 10),
        'harga' => $faker->numberBetween(1, 10),
        'kuota' => $faker->numberBetween(1, 10),
    ];
});
