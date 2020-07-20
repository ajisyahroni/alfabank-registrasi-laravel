<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inbox;
use Faker\Generator as Faker;

$factory->define(Inbox::class, function (Faker $faker) {
    return [
        'nama' => $faker->name(),
        'email' => $faker->email,
        'subjek' => $faker->word(),
        'pesan' => $faker->text
    ];
});
