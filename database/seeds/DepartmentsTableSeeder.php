<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d1 = factory(\App\Models\Department::class)->create([
            'name' => 'Oddział Dolnośląśki',
            'president_id' => null,
            'secretary_id' => null,
            'paymaster_id' => null,
            'prev_president_id' => null,
            'next_president_id' => null,
        ]);

        $d2 = factory(\App\Models\Department::class)->create([
            'name' => 'Oddział Małopolski',
            'president_id' => null,
            'secretary_id' => null,
            'paymaster_id' => null,
            'prev_president_id' => null,
            'next_president_id' => null,
        ]);

        $d3 = factory(\App\Models\Department::class)->create([
            'name' => 'Oddział Pomorski',
            'president_id' => null,
            'secretary_id' => null,
            'paymaster_id' => null,
            'prev_president_id' => null,
            'next_president_id' => null,
        ]);

        $d4 = factory(\App\Models\Department::class)->create([
            'name' => 'Oddział Warmińsko-Mazurski',
            'president_id' => null,
            'secretary_id' => null,
            'paymaster_id' => null,
            'prev_president_id' => null,
            'next_president_id' => null,
        ]);

        // create few users
        // d1
        $user = tap(factory(\App\User::class)->create([
            'email' => 'd1_president@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'department_id' => $d1->id
        ]), function($user) {
            $user->profile
                ->fill(factory(\App\Models\Profile::class)->raw([
                    'user_id' => $user->id,
                ]))
                ->save();
        });
        $d1->assignRoleToUser('Prezes Oddziału', $user);

        $user = tap(factory(\App\User::class)->create([
            'email' => 'd1_secretary@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'department_id' => $d1->id
        ]), function($user) {
            $user->profile
                ->fill(factory(\App\Models\Profile::class)->raw([
                    'user_id' => $user->id,
                ]))
                ->save();
        });
        $d1->assignRoleToUser('Sekretarz Oddziału', $user);

        $user = tap(factory(\App\User::class)->create([
            'email' => 'd1_paymaster@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'department_id' => $d1->id
        ]), function($user) {
            $user->profile
                ->fill(factory(\App\Models\Profile::class)->raw([
                    'user_id' => $user->id,
                ]))
                ->save();
        });
        $d1->assignRoleToUser('Skarbnik Oddziału', $user);

        // d2
        $user = tap(factory(\App\User::class)->create([
            'email' => 'd2_president@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'department_id' => $d2->id
        ]), function($user) {
            $user->profile
                ->fill(factory(\App\Models\Profile::class)->raw([
                    'user_id' => $user->id,
                ]))
                ->save();
        });
        $d2->assignRoleToUser('Prezes Oddziału', $user);

        $user = tap(factory(\App\User::class)->create([
            'email' => 'd2_secretary@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'department_id' => $d2->id
        ]), function($user) {
            $user->profile
                ->fill(factory(\App\Models\Profile::class)->raw([
                    'user_id' => $user->id,
                ]))
                ->save();
        });
        $d2->assignRoleToUser('Sekretarz Oddziału', $user);

        $user = tap(factory(\App\User::class)->create([
            'email' => 'd2_paymaster@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'department_id' => $d2->id
        ]), function($user) {
            $user->profile
                ->fill(factory(\App\Models\Profile::class)->raw([
                    'user_id' => $user->id,
                ]))
                ->save();
        });
        $d2->assignRoleToUser('Skarbnik Oddziału', $user);

    }
}
