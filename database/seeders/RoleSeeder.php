<?php

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
        $role_admin->description= 'An administrator user';
        $role_admin->save();

        $role_dj = new Role();
        $role_dj->name = 'dj';
        $role_dj->description= 'I am a DJ';
        $role_dj->save();

        $role_eventmanager = new Role();
        $role_eventmanager->name = 'eventmanager';
        $role_eventmanager->description= 'I am an Event Manager';
        $role_eventmanager->save();

    }
}
