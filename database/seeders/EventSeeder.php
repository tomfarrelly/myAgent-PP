<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:04:53+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-13T19:37:37+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $event->venue = "Hanger";
        $event->date = "2020-09-11";
        $event->time = "22:00";
        $event->type = "Techno";
        $event->user_id = $shane->id;
        $event->save();
    }
}
