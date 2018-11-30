<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Hardware',
            'slug' => 'hardware',
            'created_at' => now(),
            'status' => '1'
        ]); 
        DB::table('tags')->insert([
            'name' => 'MD',
            'slug' => 'md',
            'created_at' => now(),
            'status' => '1'
        ]); DB::table('tags')->insert([
            'name' => 'Surgery',
            'slug' => 'surgery',
            'created_at' => now(),
            'status' => '1'
        ]);  
    }
}
