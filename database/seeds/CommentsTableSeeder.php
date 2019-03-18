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
