<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $type = new Type();
      $type->name = "Trance";
      $type->save();

      $type = new Type();
      $type->name = "Drum ‘n Bass";
      $type->save();

      $type = new Type();
      $type->name = "Breakbeat";
      $type->save();

      $type = new Type();
      $type->name = "Underground Music";
      $type->save();

      $type = new Type();
      $type->name = "Dubstep";
      $type->save();

      $type = new Type();
      $type->name = "EDM";
      $type->save();

      $type = new Type();
      $type->name = "House Music";
      $type->save();

      $type = new Type();
      $type->name = "Techno";
      $type->save();

      $type = new Type();
      $type->name = "Rap";
      $type->save();

      $type = new Type();
      $type->name = "Pop";
      $type->save();
    }
}
