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
        'comment' => 'This is a blog_1 test comment.',
        'approved' => true,
        'post_id' => 1,
        ]);

        DB::table('comments')->insert([
          'username' => 'Demoncowgirl',
          'comment' => 'Nee! Bring me shrubbery!',
          'approved' => true,
          'post_id' => 41,
          ]);

          DB::table('comments')->insert([
            'username' => 'Ellie Mae',
            'comment' => 'I love bacon!!',
            'approved' => false,
            'post_id' => 21,
            ]);

            DB::table('comments')->insert([
              'username' => 'Ellie Mae',
              'comment' => 'Yay! Grim!!!',
              'approved' => false,
              'post_id' => 91,
              ]);

    }
}
