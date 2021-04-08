<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:15:23+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-04-08T17:24:42+01:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Constants\GlobalConstants;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'venue_id',
        'date',
        'time',
        'cover',
        'genre_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    public function user()
    {
      return $this->belongsTo('App\Models\User');

    }

    public function dj()
    {
      return $this->belongsTo('App\Models\Dj' );


    }

    public function eventmanager()
    {
      return $this->belongsToMany('App\Models\Eventmanager' );


    }

    public function booking()
    {
      return $this->hasMany('App\Models\Booking');
    }

    public function venue()
    {
   	  return $this->belongsTo('App\Models\Venue');
    }




    public function genre()
    {
      return $this->belongsTo('App\Models\Genre');
    }


}
