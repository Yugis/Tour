<?php

use Illuminate\Database\Seeder;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Facility::create(['name' => 'Airport Transfer']);
        \App\Facility::create(['name' => 'Resto Bar']);
        \App\Facility::create(['name' => 'Restaurant']);
        \App\Facility::create(['name' => 'Swimming Pool']);
    }
}
