<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\Models\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Models\Blog::factory()->count(30)->create(); 
    }
}
