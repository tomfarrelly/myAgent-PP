<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly

# @Last modified time: 2021-04-08T17:22:27+01:00





namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dj extends Model
{
    use HasFactory;
    protected $fillable = [
    'price',
    'track1',
    'track2',
    'track3',
    ];



    protected $primaryKey = 'id';
    protected $hidden = [
    'user_id',

    ];




    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

    public function event()
    {
      return $this->belongsToMany('App\Models\Event' , 'event_id'); //'dj_event', 'event_id'
    }

    public function genre()
    {
      return $this->belongsToMany('App\Models\Genre', 'dj_genres');
    }

    public function booking()
    {
      return $this->hasMany('App\Models\Booking');
    }

    public function availability()
    {
      return $this->hasMany('App\Models\Availability');
    }

}
