<?php

use Faker\Generator as Faker;

$factory->define(App\Filme::class, function (Faker $faker) {
    return [
      'title' => $faker->word,
      'awards' => rand(0,20),
      'release_date' => $faker->date,
      'length' => rand(40,300),
      'genre_id' => rand(1,12),
      'revenue' => 0
    ];
});
