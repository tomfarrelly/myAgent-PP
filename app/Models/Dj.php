<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly

# @Last modified time: 2021-01-16T14:44:10+00:00





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
      return $this->belongsTo('App\Models\User');
    }

    public function event()
    {
      return $this->belongsToMany('App\Models\Event' , 'event_id'); //'dj_event', 'event_id'
    }

    public function booking()
    {
      return $this->hasMany('App\Models\Booking',);
    }
}
