<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Mailbox::class, function (Faker $faker) {
    $rand = rand(1, 10);

    return [
        'user_id' => factory(\App\User::class),
        'name' => $faker->sentence,
        'email' => $faker->safeEmail,
        'password' => 'password',
        'host' => '127.0.0.1',
        'port' => '587',
        'encryption' => 'TLS',
    ];
});
