<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $rand = rand(1, 10);

    return [
        'department_id' => $rand > 3 ? rand(1, 4) : null,
        'email' => $rand > 3 ? $faker->unique()->safeEmail : null,
        'email_verified_at' => $rand > 4 ? now() : null,
        'password' => $rand > 5 ? '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' : null, // password
        'remember_token' => Str::random(10),
        'membership_kind' => $rand > 3 ? 'default' : 'resident',
        'membership_status' => $rand > 3 ? $faker->randomElement($array = array('active', 'warned', 'suspended')) : null,
        'title' => $rand > 3 ? 'dr' : 'prof.',
    ];
});
