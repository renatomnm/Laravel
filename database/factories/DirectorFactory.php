<?php

use Faker\Generator as Faker;

$factory->define(App\Diretor::class, function (Faker $faker) {
    return [
      'first_name' => $faker->firstName,
      'last_name' => $faker->lastName,
      'birth_date' => $faker->date
    ];
});
