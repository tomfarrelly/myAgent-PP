<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-14T23:13:44+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dj;
use App\Models\Role;
use App\Models\User;
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
