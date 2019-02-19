<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Beth Salvatore',
        'email' => 'demoncowgirl@gmail.com',
        'username' => 'Demoncowgirl',
    		'password' => bcrypt('secret'),
    		'type' => 'admin',
        ]);

        DB::table('users')->insert([
          'name' => 'Bob Oedy',
          'email' => 'bob@example.com',
          'username' => 'Bob O.',
          'password' => bcrypt('secret'),
          'type' => 'admin',
          ]);

        DB::table('users')->insert([
          'name' => 'Ellie Mae',
          'email' => 'ellie@example.com',
          'username' => 'Ellie Mae',
          'password' => bcrypt('secret'),
          'type' => 'guest',
          ]);
    }
}
