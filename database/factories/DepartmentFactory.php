<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Department::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'president_id' => factory(\App\User::class),
        'secretary_id' => factory(\App\User::class),
        'paymaster_id' => factory(\App\User::class),
        'prev_president_id' => factory(\App\User::class),
        'next_president_id' => factory(\App\User::class),
    ];
});
