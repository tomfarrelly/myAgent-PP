<?php

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
      return $this->belongsTo('App\Models\Event' , 'event_id'); //'dj_event', 'event_id'
    }

    public function bookings()
    {
      return $this->hasMany('App\Models\Booking');
    }
}
