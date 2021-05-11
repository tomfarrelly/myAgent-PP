<?php
# @Author: tomfarrelly
# @Date:   2021-02-07T17:42:55+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-15T17:35:04+00:00




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
        $venue->name = "WigWam";
        $venue->location = "54 Middle Abbey St, North City, Dublin, D01 E2X4, Ireland";
        $venue->capacity = 650;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Index";
        $venue->location = "39-40 Arran Quay, Smithfield, Dublin 7, D07 X76R, Ireland";
        $venue->capacity = 600;
        $venue->services = "Alcohol, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Hangar";
        $venue->location = "Andrews Lane, Dublin, Ireland";
        $venue->capacity = 500;
        $venue->services = "Alcohol, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Jam Park";
        $venue->location = "South Quarter, Airside Retail Park, Swords, Co. Dublin, K67 X0K8, Ireland";
        $venue->capacity = 2800;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "The Wiley Fox";
        $venue->location = "1st Floor, 28 Eden Quay, North City, Dublin, D01 DE44, Ireland";
        $venue->capacity = 250;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "The George";
        $venue->location = "Located on Georges St";
        $venue->capacity = 2250;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "TIME";
        $venue->location = "40-42 James St, Cookstown BT80 8LT";
        $venue->capacity = 250;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Sintillate";
        $venue->location = "Garvoge river Sintillate, formally HMV Soundgarden";
        $venue->capacity = 250;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Lavery’s";
        $venue->location = "12-18 Bradbury Pl, Belfast BT7 1RS";
        $venue->capacity = 250;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Coyotes Late Bar & Club";
        $venue->location = "34 Shop St, Galway, Ireland";
        $venue->capacity = 250;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "The Foundry";
        $venue->location = "Tullow St, Graigue, Carlow, Ireland";
        $venue->capacity = 250;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Pulse Nightclubx";
        $venue->location = "55-61 Port Rd, Gortlee, Letterkenny, Co. Donegal, Ireland";
        $venue->capacity = 250;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "Dali";
        $venue->location = "13 Carey’s Ln, Centre, Cork, T12 RD00, Ireland";
        $venue->capacity = 250;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();

        $venue = new Venue();
        $venue->name = "The Wright Venue";
        $venue->location = "South Quarter, Airside Retail Park, Crowscastle, Swords, Co. Dublin, Ireland";
        $venue->capacity = 250;
        $venue->services = "Alcohol, Food, DJ Decks, AV Lighting, Security";
        $venue->save();
    }
}
