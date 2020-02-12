<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

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

$factory->define(\App\Models\MembershipPayment::class, function (Faker $faker) {
    return [
        'member_id' => 1,
        'period' => '2020',
        'amount' => 150,
        'p24_session_id' => '123123123',
        'p24_currency' => 'PLN',
        'paid_at' => date('Y-m-d H:i:s'),
        'confirmed' => false,
    ];
});
