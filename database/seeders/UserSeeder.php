<?php
# @Author: tomfarrelly
# @Date:   2020-12-08T19:04:12+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-15T17:34:00+00:00




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
      $role_eventManager = Role::where('name','eventManager')->first();
      $role_dj = Role::where('name','dj')->first();

      $admin = new User();
      $admin->name = 'admin';
      $admin->email = 'admin@myagent.com';
      $admin->username = 'admin1';
      $admin->password = Hash::make('secret');
      $admin->bio = 'I am an Admin';
      $admin->location = 'wherever';

      $admin->save();
      $admin->roles()->attach($role_admin);

      $eventManager = new User();
      $eventManager->name = 'Shane Ivory';
      $eventManager->email = 'shane@em.com';
      $eventManager->username = 'SafeHaus Dublin';
      $eventManager->password = Hash::make('secret');
      $eventManager->bio = 'Safehaus is a Dublin based Collective set up with the aim of bringing like minded people together and throwing some serious parties with the best House, Disco and Dance music from every corner of the globe.';
      $eventManager->location = 'Dublin, Ireland';

      $eventManager->save();
      $eventManager->roles()->attach($role_eventManager);

      $dj = new User();
      $dj->name = 'Max Clarke';
      $dj->email = 'max@dj.com';
      $dj->username = 'outl1er';
      $dj->password = Hash::make('secret');
      $dj->bio = 'Dublin based DJ playing Break beat, ELectro and Deconstructed Club Music out to the Dublin Massive for 2 years.';
      $dj->location = 'Dublin, Ireland';

      $dj->save();
      $dj->roles()->attach($role_dj);

      $dj = new User();
      $dj->name = 'John Mont';
      $dj->email = 'john@dj.com';
      $dj->username = 'outl1er';
      $dj->password = Hash::make('secret');
      $dj->bio = 'ing Break beat, ELectro and Deconstructed Club Music out to the Dublin Massive for 2 years.';
      $dj->location = 'reland';

      $dj->save();
      $dj->roles()->attach($role_dj);

      $dj = new User();
      $dj->name = 'Dawid K';
      $dj->email = 'dawid@dj.com';
      $dj->username = 'dawid1';
      $dj->password = Hash::make('secret');
      $dj->bio = 'Based DJ playing Break beat, ELectro and Deconstructed Club Music out to the Dublin Massive for 2 years.';
      $dj->location = 'Ireland';

      $dj->save();
      $dj->roles()->attach($role_dj);


      $dj = new User();
      $dj->name = 'Tom Farrelly';
      $dj->email = 'tom@dj.com';
      $dj->username = 'tom1';
      $dj->password = Hash::make('secret');
      $dj->bio = 'Based DJ playing Break beat, ELectro and Deconstructed Club Music out to the Dublin Massive for 2 years.';
      $dj->location = 'Ireland';

      $dj->save();
      $dj->roles()->attach($role_dj);


      for($i = 1; $i <= 10; $i++) {
        User::factory()->hasDj()->create();
      }

      for($i = 1; $i <= 10; $i++) {
        User::factory()->create()->roles()->attach($role_eventManager);
      }


//roles()->attach($role_eventManager)->where('name', $role)
    }
}
