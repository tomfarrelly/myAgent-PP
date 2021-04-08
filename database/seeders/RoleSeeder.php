<?php

# @Author: tomfarrelly
# @Date:   2020-12-08T19:04:27+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-22T17:08:46+00:00





namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $role_admin = new Role();
      $role_admin->name = 'admin';
      $role_admin->description = 'An administrator user';
      $role_admin->save();

      $role_eventManager = new Role();
      $role_eventManager->name = 'eventManager';
      $role_eventManager->description = 'An event manager user';
      $role_eventManager->save();

      $role_dj = new Role();
      $role_dj->name = 'dj';
      $role_dj->description = 'A dj user';
      $role_dj->save();

    }
}
