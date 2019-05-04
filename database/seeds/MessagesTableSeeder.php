<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
          'username' => '',
          'created_at' => Carbon::now()
        ]);

        DB::table('messages')
        ->insert(['email' => 'micky@example.com',
            'name' => 'Micky Patterson',
            'message' => 'Don\'t play at Ellie\'s party! She is spoiled rotten already!!',
            'username' => 'Big Boy',
            'created_at' => Carbon::now()
          ]);

          DB::table('messages')
          ->insert(['email' => 'roni@example.com',
              'name' => 'Roni Baloney',
              'message' => 'Hello!!',
              'username' => '',
              'created_at' => Carbon::now()
            ]);

            DB::table('messages')
            ->insert(['email' => 'piccolo@example.com',
                'name' => 'Piccolo Salvatore',
                'message' => 'Meow!!',
                'username' => 'LaLa',
                'created_at' => Carbon::now()
              ]);
    }
}
