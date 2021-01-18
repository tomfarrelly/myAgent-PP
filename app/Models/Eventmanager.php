<?php
# @Author: tomfarrelly
# @Date:   2021-01-15T17:19:51+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-01-15T17:37:23+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventmanager extends Model
{
    use HasFactory;

    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

    public function event()
    {
      return $this->hasMany('App\Models\Event' , 'event_id'); //'dj_event', 'event_id'
    }

    public function bookings()
    {
      return $this->hasMany('App\Models\Booking');
    }
}
