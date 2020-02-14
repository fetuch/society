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

        factory(\App\User::class, 50)->create()->each(function ($user) use ($periods) {
            $user->profile->fill(factory(\App\Models\Profile::class)->raw([
                'user_id' => $user->id,
            ]))->save();

            if ($user->membership_status) {
                factory(\App\Models\MembershipPayment::class)->create([
                    'member_id' => $user->id,
                    'period' => $periods[$user->membership_status],
                    'confirmed' => rand(0, 1),
                ]);
            }
        });

        tap(factory(\App\User::class)->create([
            'email' => 'rano@lptg.pl',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]))->assignRole('Super Admin');

        tap(factory(\App\User::class)->create([
            'email' => 'test@lptg.pl',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]))->assignRole(['Członek Zarządu Towarzystwa', 'Sekretarz Towarzystwa']);
    }
}
