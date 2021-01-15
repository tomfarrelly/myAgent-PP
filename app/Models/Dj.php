<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-21T14:22:59+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dj extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
    ];

    protected $primaryKey = 'id';
    protected $hidden = [
        'user_id',
        // 'dj_id',
    ];


    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function event()
    {
      return $this->belongsToMany(Event::class); //'dj_event', 'event_id'
    }

    public function bookings()
    {
      return $this->hasMany('App\Models\Booking');
    }
}
