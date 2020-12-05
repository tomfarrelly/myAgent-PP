<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_admin = Role::where('name','admin')->first();
        $role_dj = Role::where('name','dj')->first();
        $role_eventmanager = Role::where('name','eventmanager')->first();


        $admin = new User();
        $admin->name = 'Dawid Karcz';
        $admin->email = 'admin@agent.ie';
        $admin->password = Hash::make('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $dj = new User();
        $dj->name = 'Tom Farrelly';
        $dj->email = 'dj@agent.ie';
        $dj->password = Hash::make('secret');
        $dj->save();
        $dj->roles()->attach($role_dj);

        $eventmanager = new User();
        $eventmanager->name = 'John Jones';
        $eventmanager->email = 'manager@agent.ie';
        $eventmanager->password = Hash::make('secret');
        $eventmanager->save();
        $eventmanager->roles()->attach($role_eventmanager);
    }
}
