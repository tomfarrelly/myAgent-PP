<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:15:23+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-20T18:57:09+00:00




namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //use HasFactory;

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

    protected $primaryKey = 'id';
    protected $hidden = [
        'user_id',
        // 'dj_id',
    ];

    public function user()
    {
      return $this->belongsToOne(User::class, 'user_id');

    }

    public function dj()
    {
      return $this->belongsToMany(Dj::class);//'dj_event', 'dj_id'


    }

    public function bookings()
    {
      return $this->hasMany('App\Models\Booking');
    }
    // public function djEvent()
    // {
    //   $events = Event::with('dj');
    //   return Datatables::of($events)->make(true);
    // }


}
