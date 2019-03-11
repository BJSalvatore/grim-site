<?php

use Illuminate\Database\Seeder;

class PressReleasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('releases')->insert([
          'title' => 'The Black Lung Show #14',
          'release_date' => '06/04/2017',
          'url' => 'https://www.youtube.com/watch?v=i0O8GpczSMc&feature=youtu.be',
        ]);

        DB::table('releases')->insert([
          'title' => 'Strange Reaction – An Interview With Bob Oedy',
          'release_date' => '04/21/2018',
          'url' => 'http://strangereaction.com/2018/04/21/an-interview-with-bob-oedy/',
        ]);

        DB::table('releases')->insert([
          'title' => 'Grim – Cop Killer (Official Video)',
          'release_date' => '07/04/2017',
          'url' => 'https://www.youtube.com/watch?v=1iexpmwhAec&feature=youtu.be',
        ]);

        DB::table('releases')->insert([
          'title' => 'The Grim – Dying Scene',
          'release_date' => '03/08/2019',
          'url' => 'https://dyingscene.com/bands/the-grim/',
        ]);

        DB::table('releases')->insert([
          'title' => 'The Whatever68 Radio – 3 Year Celebration Festival Interview',
          'release_date' => '05/01/2015',
          'url' => 'https://punkglobe.com/thewhatever68radiointerview0515.php',
        ]);

        DB::table('releases')->insert([
          'title' => 'The Ranger – Boston Undreground Film Festival',
          'release_date' => '03/24/2018',
          'url' => 'https://bostonunderground.org/schedule/2018/feature/the-ranger/',
        ]);

        DB::table('releases')->insert([
          'title' => 'Warped Tour Founder’s SoCal Festival Proves Punk’s Not Dead',
          'release_date' => '04/27/2017',
          'url' => 'https://www.billboard.com/articles/columns/music-festivals/7775636/its-not-dead-2-festival-lineup-kevin-lyman-interview',
        ]);

        DB::table('releases')->insert([
          'title' => 'The Grim sign to Felony Records, stream unreleased song – Dying Scene',
          'release_date' => '05/15/2016',
          'url' => 'https://dyingscene.com/news/the-grim-sign-to-felony-records-stream-unreleased-song/',
        ]);
    }
}
