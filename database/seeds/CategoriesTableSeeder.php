<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create(['name' => 'Apartment']);
        \App\Category::create(['name' => 'Hotel']);
        \App\Category::create(['name' => 'Hostel']);
        \App\Category::create(['name' => 'Inn']);
        \App\Category::create(['name' => 'Villa']);
    }
}
