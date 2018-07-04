<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 100; $i++) { 
    		DB::table('products')->insert([
            'name' => str_random(10),
            'description' => str_random(150),
            'link' => str_random(10),
        ]);
    	}
    }
}
