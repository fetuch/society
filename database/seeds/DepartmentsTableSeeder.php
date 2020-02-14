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
        factory(\App\Models\Department::class)->create(['name' => 'Oddział Dolnośląśki']);
        factory(\App\Models\Department::class)->create(['name' => 'Oddział Małopolski']);
        factory(\App\Models\Department::class)->create(['name' => 'Oddział Pomorski']);
        factory(\App\Models\Department::class)->create(['name' => 'Oddział Warmińsko-Mazurski']);
    }
}
