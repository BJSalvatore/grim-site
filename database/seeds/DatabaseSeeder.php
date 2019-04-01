<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(PostsTableSeeder ::class);
      $this->call(UserTableSeeder ::class);
      $this->call(CommentsTableSeeder ::class);
      $this->call(PressReleasesSeeder ::class);
      $this->call(FileTableSeeder :: class);
      $this->call(InventoryTableSeeder :: class);
    }
}
