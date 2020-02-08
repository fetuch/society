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
      \App\Models\Department::create(['name' => 'Oddział Dolnośląśki']);

      \App\Models\Department::create(['name' => 'Oddział Małopolski']);

      \App\Models\Department::create(['name' => 'Oddział Pomorski']);

      \App\Models\Department::create(['name' => 'Oddział Warmińsko-Mazurski']);
    }
}
