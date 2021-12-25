<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Blog::create(
            [
              'title'=>'Covid 19',
              'description'=>'Sinopharm injection',
              'image'=>'test.jpg'  
            ]
        );
        Blog::create(
            [
              'title'=>'Winter Competition',
              'description'=>'testing',
              'image'=>'test.jpg'  
            ]
        );

    }
}
