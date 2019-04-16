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
        'approved' => true,
        'post_id' => 1,
        ]);

        DB::table('comments')->insert([
          'username' => 'Demoncowgirl',
          'comment' => 'This is another test comment.',
          'approved' => true,
          'post_id' => 1,
          ]);

          DB::table('comments')->insert([
            'username' => 'Ellie Mae',
            'comment' => 'This is another test comment.',
            'approved' => false,
            'post_id' => 1,
            ]);

            DB::table('comments')->insert([
              'username' => 'Ellie Mae',
              'comment' => 'This is another test comment.',
              'approved' => false,
              'post_id' => 1,
              ]);

    }
}
