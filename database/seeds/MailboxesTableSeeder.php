<?php

use Illuminate\Database\Seeder;

class MailboxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Mailbox::class)->create([
            'name' => 'Sekretarz Towarzystwa',
            'email' => 'sekretarz@lptgpl.usermd.net',
            'password' => 'LopU4nwwrt4UNnFzMwkp',
            'host' => 'mail43.mydevil.net',
            'port' => '587',
            'encryption' => 'TLS',
        ]);

        factory(\App\Models\Mailbox::class)->create([
            'name' => 'Skarbnik Towarzystwa',
            'email' => 'skarbnik@lptgpl.usermd.net',
            'password' => 'biE6Vqq6hRKCVvLKr5wC',
            'host' => 'mail43.mydevil.net',
            'port' => '587',
            'encryption' => 'TLS',
        ]);
    }
}
