<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
      $this->call(PostsTableSeeder::class);
      $this->call(UserTableSeeder::class);
      $this->call(CommentsTableSeeder::class);
      $this->call(PressReleasesSeeder::class);
      $this->call(FileTableSeeder::class);
      $this->call(ItemsTableSeeder::class);
      $this->call(MessagesTableSeeder::class);
      $this->call(CartsTableSeeder::class);
    }
}
