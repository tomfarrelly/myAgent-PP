<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-04-08T15:03:54+01:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dj;
use App\Models\Role;
use App\Models\User;
use App\Models\Genre;
class DjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_dj = Role::where('name','dj')->first();

      foreach ($role_dj->users as $djs)
      {
       $dj = new Dj();
       $dj->price = '' . $this->random_str(3, '123456789');
       $dj->user_id = $djs->id;
       foreach(Genre::all() as $genre) {


                        $dj->genre()->attach($genre);


                        //$genre->dj()->attach($dj);

      }
     //  foreach(DJ::all() as $dj) {
     //
     //
     //                   //$dj->genre()->attach($genre->id);
     //                   $genre->Dj()->attach($dj);
     //
     // }
       $dj->save();
      }
    }

    private function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
      $pieces = [];
      $max = mb_strlen($keyspace, '8bit') - 1;
      for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
      }
      return implode('', $pieces);
    }
}
