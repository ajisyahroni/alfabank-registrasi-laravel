<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pendaftaran;
use Faker\Generator as Faker;

$factory->define(Pendaftaran::class, function (Faker $faker) {
    return [
        'id_user' => rand(1,10),
        'id_program_kursus'=> rand(6,9),
        'status'=> 'masa studi'
    ];
});
