<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Profile::class, function (Faker $faker) {
    $rand = rand(1, 10);

    return [
        'user_id' => factory(\App\User::class),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'joined_at' => date('Y-m-d'),
        'title' => $rand > 3 ? 'dr' : 'prof.',
    ];
});
