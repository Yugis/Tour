<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(CategoriesTableSeeder::class);
    	$this->call(LocationsTableSeeder::class);
    	$this->call(FacilitiesTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
