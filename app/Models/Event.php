<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:15:23+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-01-16T14:44:05+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'venue',
        'date',
        'time',
        'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    public function user()
    {
      return $this->belongsTo('App\Models\User', 'user_id');

    }

    public function dj()
    {
      return $this->belongsTo('App\Models\Dj' );//'dj_event', 'dj_id'


    }

    public function eventmanager()
    {
      return $this->belongsToMany('App\Models\Eventmanager' );//'dj_event', 'dj_id'


    }

    public function booking()
    {
      return $this->hasMany('App\Models\Booking');
    }
    // public function djEvent()
    // {
    //   $events = Event::with('dj');
    //   return Datatables::of($events)->make(true);
    // }


}
