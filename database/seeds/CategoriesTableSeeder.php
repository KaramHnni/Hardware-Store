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
        DB::table('categories')->insert([
            'slug' => 'desktop-computers',
            'name' => 'Desktop Computers',
            'created_at' => now(),
            'status' => '1'
        ]);
        DB::table('categories')->insert([
            'slug' => 'smartphones',
            'name' => 'Smartphones',
            'created_at' => now(),
            'status' => '1'
        ]);
    }
}
