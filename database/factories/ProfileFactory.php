<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Profile::class, function (Faker $faker) {
  return [
    'user_id' => factory(\App\User::class),
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'joined_at' => date('Y-m-d'),
  ];
});
