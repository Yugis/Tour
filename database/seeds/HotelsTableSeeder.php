<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Hotel', 25)->create()->each(function ($hotel) {
        	$hotel->facilities()->sync(\App\Facility::all()->random(mt_rand(1, 4))->pluck('id')->toArray());
        });
	}
}
