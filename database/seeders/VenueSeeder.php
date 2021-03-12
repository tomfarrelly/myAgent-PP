<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venue;
class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venue = new Venue();
        $venue->name = "The George";
        $venue->location = "Dublin";
        $venue->save();

        $venue = new Venue();
        $venue->name = "The Wright Venue";
        $venue->location = "Dublin";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Dali";
        $venue->location = "Cork";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Pulse Nightclub";
        $venue->location = "Letterkenny";
        $venue->save();

        $venue = new Venue();
        $venue->name = "WigWam";
        $venue->location = "Dublin";
        $venue->save();

        $venue = new Venue();
        $venue->name = "The Foundry";
        $venue->location = "Carlow";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Coyotes Late Bar & Club";
        $venue->location = "Galway";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Lavery’s";
        $venue->location = "Belfast";
        $venue->save();

        $venue = new Venue();
        $venue->name = "TIME";
        $venue->location = "Cookstown";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Sintillate";
        $venue->location = "Sligo";
        $venue->save();
    }
}
