<?php

use Faker\Generator as Faker;

$factory->define(App\Movies::class, function (Faker $faker) {
    return [
      'title' => $faker->word,
      'awards' => rand(0,20),
      'release-date' => $faker->date,
      'length' => rand(40,300),
      'genre_id' => rand(1,12),
    ];
});
