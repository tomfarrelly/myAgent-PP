<?php
# @Author: tomfarrelly
# @Date:   2021-03-15T15:31:24+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-15T16:07:19+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

  //Get the events for Venue.

  public function events()
  {
    return $this->hasMany('App\Models\Event', 'venue_id');
  }

}
