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
        DB::table('categories')->insert([
            'slug' => 'laptops',
            'name' => 'Laptops',
            'created_at' => now(),
            'status' => '1'
        ]);
    }
}
