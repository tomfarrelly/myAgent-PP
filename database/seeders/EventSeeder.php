<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:04:53+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-20T19:03:22+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
         $event->venue_id = 1;
         $event->date = "2021-3-11";
         $event->time = "22:00";
         $event->type_id = 1;
         $event->user_id = $shane->id;

         $event->save();

         $event = new Event();
         $event->name = "Techno & Cans";
         $event->description = "Fun Filled Rave";
         $event->venue_id = 2;
         $event->date = "2021-3-11";
         $event->time = "22:00";
         $event->type_id = 2;
         $event->user_id = $shane->id;

         $event->save();

         $event = new Event();
         $event->name = "Techno & Cans";
         $event->description = "Fun Filled Rave";
         $event->venue_id = 3;
         $event->date = "2021-3-11";
         $event->time = "22:00";
         $event->type_id = 3;
         $event->user_id = $shane->id;

         $event->save();
         $event = new Event();
         $event->name = "Techno & Cans";
         $event->description = "Fun Filled Rave";
         $event->venue_id = 4;
         $event->date = "2021-3-11";
         $event->time = "22:00";
         $event->type_id = 4;
         $event->user_id = $shane->id;

         $event->save();

         $event = new Event();
         $event->name = "Techno & Cans";
         $event->description = "Fun Filled Rave";
         $event->venue_id = 5;
         $event->date = "2021-3-11";
         $event->time = "22:00";
         $event->type_id = 5;
         $event->user_id = $shane->id;

         $event->save();

         $event = new Event();
         $event->name = "Techno & Cans";
         $event->description = "Fun Filled Rave";
         $event->venue_id = 6;
         $event->date = "2021-3-11";
         $event->time = "22:00";
         $event->type_id = 6;
         $event->user_id = $shane->id;

         $event->save();

         $event = new Event();
         $event->name = "Techno & Cans";
         $event->description = "Fun Filled Rave";
         $event->venue_id = 7;
         $event->date = "2021-3-11";
         $event->time = "22:00";
         $event->type_id = 7;
         $event->user_id = $shane->id;

         $event->save();

         $event = new Event();
         $event->name = "Techno & Cans";
         $event->description = "Fun Filled Rave";
         $event->venue_id = 8;
         $event->date = "2021-3-11";
         $event->time = "22:00";
         $event->type_id = 8;
         $event->user_id = $shane->id;

         $event->save();

         $event = new Event();
         $event->name = "Techno & Cans";
         $event->description = "Fun Filled Rave";
         $event->venue_id = 9;
         $event->date = "2021-3-11";
         $event->time = "22:00";
         $event->type_id = 9;
         $event->user_id = $shane->id;

         $event->save();

         $event = new Event();
         $event->name = "Techno & Cans";
         $event->description = "Fun Filled Rave";
         $event->venue_id = 10;
         $event->date = "2021-3-11";
         $event->time = "22:00";
         $event->type_id = 10;
         $event->user_id = $shane->id;

         $event->save();
     }
 }
