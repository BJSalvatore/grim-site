<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('comments')->insert([
        'username' => 'Demoncowgirl',
        'comment' => 'This is a test comment.',
        'slug' => 'blog-1',
        'approved' => true,
        'post_id' => 1,
        ]);

        DB::table('comments')->insert([
<<<<<<< HEAD
          'username' => 'Demoncowgirl',
          'comment' => 'This is another test comment.',
          'slug' => 'blog-1',
=======
          'username' => 'Ellie Mae',
          'comment' => 'This is another test comment.',
>>>>>>> 6006fef8a86f5c374b50e619f86423bd1862e09a
          'approved' => true,
          'post_id' => 1,
          ]);

        // DB::table('comments')->insert([
        //   'name' => 'Ellie Mae',
        //   'username' => 'Ellie Mae',
        //   'email' => 'ellie@example.com',
        //   'comment' => 'This is a test comment from the dog. Woof woof.',
        //   'approved' => true,
        //   'post_id' => 2,
        //   ]);
    }
}
