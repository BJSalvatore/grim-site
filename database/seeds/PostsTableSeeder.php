<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
    {
       DB::table('posts')->truncate();

       $posts = [
            ['title' => 'Post 1', 'post' => 'This is post #1' ],
            ['title' => 'Post 2', 'post' => 'This is post #2' ],
            ['title' => 'Post 3', 'post' => 'This is post #3' ],
            ['title' => 'Post 4', 'post' => 'This is post #4' ]
          ];

          DB::table('posts')->insert($posts);
    }
}
