<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'id_user' => 1,
        'judul' => $faker->word(),
        'cover' => $faker->imageUrl(),
        'konten' => $faker->text(),
    ];
});
