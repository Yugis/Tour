<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Location::create(['name' => 'Greece']);
        \App\Location::create(['name' => 'Italy']);
        \App\Location::create(['name' => 'Spain']);
        \App\Location::create(['name' => 'Germany']);
        \App\Location::create(['name' => 'Japan']);
    }
}
