<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-20T18:56:28+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dj extends Model
{
    use HasFactory;



    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

    public function event()
    {
      return $this->belongsToMany('App\Models\Event' , 'event_id'); //'dj_event', 'event_id'
    }

    public function bookings()
    {
      return $this->hasMany('App\Models\Booking',);
    }
}
