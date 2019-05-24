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
    }
}
