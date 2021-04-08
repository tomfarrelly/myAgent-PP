<?php
# @Author: tomfarrelly
# @Date:   2020-10-30T15:07:53+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-15T17:24:37+00:00




namespace Database\Seeders;

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

      $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);
      $this->call(GenreSeeder::class);
      $this->call(DjSeeder::class);
      $this->call(VenueSeeder::class);
      //$this->call(TypeSeeder::class);

      $this->call(BookingSeeder::class);
      $this->call(EventSeeder::class);



    }
}
