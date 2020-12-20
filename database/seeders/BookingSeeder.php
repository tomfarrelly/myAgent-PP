<?php
# @Author: tomfarrelly
# @Date:   2020-12-20T15:20:46+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-20T19:06:04+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $booking = new Booking();
      $booking->event_id = 1;
      $booking->dj_id = 1;
      $booking->status= 1;
      $booking->save();

      $booking = new Booking();
      $booking->event_id = 2;
      $booking->dj_id = 3;
      $booking->status= 1;
      $booking->save();
    }
}
