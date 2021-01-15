<?php
# @Author: tomfarrelly
# @Date:   2020-12-20T18:41:17+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-20T19:56:21+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $primaryKey = 'id';
     protected $fillable = [
         'user_id',
         'event_id',
         'status',
     ];

    public function event()
    {
      return $this->belongsTo('App\Models\Event');
    }

    public function dj()
    {
      return $this->belongsTo('App\Models\Dj');
    }

    public function eventmanager()
    {
      return $this->belongsTo('App\Models\Eventmanager');
    }
}
