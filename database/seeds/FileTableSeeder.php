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
      DB::table('files')->insert(['name' => 'BobOBerkman', 'file' => './assets/images/Bob Oedy photo by Jason Berkman.jpg', 'title' => 'Bob Oedy by Jason Berkman', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl' ]);
      DB::table('files')->insert(['name' => 'EvilTracy1', 'file' => './assets/images/EvilTracy1.jpg', 'title' => 'Photo by Evil Tracy', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['name' => 'PrettyPink', 'file' => './assets/images/PrettyInPink.jpg', 'title' => 'Pretty In Pink', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['name' => 'Warped2018', 'file' => './assets/images/TheGrimatWarpedTour2018.jpg', 'title' => 'The Grim at Warped Tour 2018', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['name' => 'EarlyDays', 'file' => './assets/images/TheGrimEarlyDays.jpg', 'title' => 'Early Days', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['name' => 'NuclearCover', 'file' => './assets/images/TheGrimNuclearWorldOrder.jpg', 'title' => 'Nuclear World Order', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['name' => 'CopKiller', 'file' => './assets/audio/the-grim-cop-killer-7-inch.mp3','title' => 'Cop Killer', 'type' => 'mp3', 'extension' => '.mp3', 'user_id' => 'Demoncowgirl'  ]);
      DB::table('files')->insert(['name' => 'NardcoreFlyer', 'file' => './assets/images/NardcoreFlyer.jpg', 'title' => 'Nardcore Flyer', 'type' => 'jpg', 'extension' => '.jpg', 'user_id' => 'Demoncowgirl'  ]);

    }
}
