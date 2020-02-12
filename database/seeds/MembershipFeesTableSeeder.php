<?php

use Illuminate\Database\Seeder;

class MembershipFeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\MembershipFee::create(['period' => '2016']);

      \App\Models\MembershipFee::create(['period' => '2017']);

      \App\Models\MembershipFee::create(['period' => '2018']);

      \App\Models\MembershipFee::create(['period' => '2019']);

      \App\Models\MembershipFee::create(['period' => '2020']);

      \App\Models\MembershipFee::create(['period' => '2021']);
    }
}
