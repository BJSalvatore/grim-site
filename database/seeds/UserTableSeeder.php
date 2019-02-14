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
      $role_member = Role::where('name', 'member') -> first();
      $role_manager  = Role::where('name', 'manager')->first();
      $member = new User();
      $member->name = 'Member Name';
      $member->username = 'Bam Bam';
      $member->email = 'drummer@example.com';
      $member->password = bcrypt('secret');
      $member->save();
      $member->roles()->attach($role_member);
      $manager = new User();
      $manager->name = 'Manager Name';
      $manager->username = 'Big Boss';
      $manager->email = 'manager@example.com';
      $manager->password = bcrypt('secret');
      $manager->save();
      $manager->roles()->attach($role_manager);
    }
}
