<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ResponseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('responses')
      ->insert(['message_id' => 1,
          'response' => 'We would love to play your party, Ellie!',
          'respondee' => 'Demoncowgirl',
          'responded_on' => Carbon::now()
        ]);

        DB::table('responses')
        ->insert(['message_id' => 1,
            'response' => 'What date is the party and what is your address?',
            'respondee' => 'Demoncowgirl',
            'responded_on' => Carbon::now()
          ]);

          DB::table('responses')
          ->insert(['message_id' => 41,
              'response' => 'What\'s up, Ellie?',
              'respondee' => 'Demoncowgirl',
              'responded_on' => Carbon::now()
            ]);

            DB::table('responses')
            ->insert(['message_id' => 41,
                'response' => 'Test Response #2',
                'respondee' => 'Demoncowgirl',
                'responded_on' => Carbon::now()
              ]);

              DB::table('responses')
              ->insert(['message_id' => 41,
                  'response' => 'Test Response #3',
                  'respondee' => 'Demoncowgirl',
                  'responded_on' => Carbon::now()
                ]);


    }
}
