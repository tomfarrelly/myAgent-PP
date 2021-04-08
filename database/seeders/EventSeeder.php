<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:04:53+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-04-08T15:13:51+01:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Genre;
use App\Models\Dj;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shane = User::where('name', "Shane Ivory")->first();

        $event = new Event();
        $event->name = "Techno & Cans";
        $event->description = "Fun Filled Rave";
        $event->date = "2020-09-11";
        $event->time = "22:00";
        $event->genre_id = 1;
        $event->venue_id = 3;
        $event->user_id = $shane->id;

        $event->save();

        $event = new Event();
        $event->name = "SafeHaus";
        $event->description = "Fun Filled Rave";
        $event->date = "2020-03-25";
        $event->time = "20:30";
        $event->genre_id = 2;
        $event->venue_id = 1;
        $event->user_id = $shane->id;

        $event->save();

        for($i = 1; $i <= 20; $i++) {
          Event::factory()->create();
        }
    }
}
