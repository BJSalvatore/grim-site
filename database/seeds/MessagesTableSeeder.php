<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('messages')
      ->insert(['email' => 'ellie@example.com',
          'name' => 'Ellie Mae Salvatore',
          'message' => 'Can you play at my birthday celebration?',
          'username' => ''
        ]);

        DB::table('messages')
        ->insert(['email' => 'micky@example.com',
            'name' => 'Micky Patterson',
            'message' => 'Don\'t play at Ellie\'s party! She is spoiled rotten already!!',
            'username' => 'Big Boy'
          ]);

          DB::table('messages')
          ->insert(['email' => 'roni@example.com',
              'name' => 'Roni Baloney',
              'message' => 'Hello!!',
              'username' => ''
            ]);

            DB::table('messages')
            ->insert(['email' => 'piccolo@example.com',
                'name' => 'Piccolo Salvatore',
                'message' => 'Meow!!',
                'username' => 'LaLa'
              ]);
    }
}
