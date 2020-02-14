<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periods = [
            'active' => '2020',
            'warned' => '2019',
            'suspended' => '2018',
        ];

        factory(\App\User::class, 50)
            ->create()
            ->each(function ($user) use ($periods) {
                $user->createProfile(factory(\App\Models\Profile::class)->raw([
                    'user_id' => $user->id
                ]));

                if ($user->membership_status)
                {
                    factory(\App\Models\MembershipPayment::class)->create([
                        'member_id' => $user->id,
                        'period' => $periods[$user->membership_status],
                        'confirmed' => rand(0, 1),
                    ]);
                }
        });
    }
}
