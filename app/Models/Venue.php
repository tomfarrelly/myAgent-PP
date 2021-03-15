<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

  //Get the events for Venue.

  public function events()
  {
    return $this->hasMany('App\Models\Event');
  }

}
