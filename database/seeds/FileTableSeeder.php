<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('files')->insert(['title' => 'Bob Oedy by Jason Berkman', 'file' => './assets/images/Bob Oedy photo by Jason Berkman.jpg', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl' ]);
      DB::table('files')->insert(['title' => 'Photo by Evil Tracy', 'file' => './assets/images/EvilTracy1.jpg', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['title' => 'Pretty In Pink', 'file' => './assets/images/PrettyInPink.jpg', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['title' => 'The Grim at Warped Tour 2018', 'file' => './assets/images/TheGrimatWarpedTour2018.jpg', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['title' => 'Early Days', 'file' => './assets/images/TheGrimEarlyDays.jpg', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['title' => 'Nuclear World Order', 'file' => './assets/images/TheGrimNuclearWorldOrder.jpg', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['title' => 'Cop Killer', 'file' => './assets/audio/the-grim_the-grim-cop-killer-7-inch.mp3', 'type' => 'mp3', 'extension' => '.mp3', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['title' => 'Nardcore Flyer', 'file' => './assets/images/nardcore_flyer.jpg', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);

    }
}
