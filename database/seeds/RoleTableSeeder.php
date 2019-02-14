<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_member = new Role();
      $role_member->name = 'member';

      $role_member->description = 'Authorized Band Member User';
      $role_member->save();

      $role_manager = new Role();
      $role_manager->name = 'manager';
      $role_manager->description = 'Super User';
      $role_manager->save();
    }
}
