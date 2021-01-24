<?php
# @Author: tomfarrelly
# @Date:   2020-12-20T18:41:17+00:00
# @Last modified by:   tomfarrelly

# @Last modified time: 2021-01-17T14:41:02+00:00





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
         'dj_id',
         'event_id',
         'status',
     ];

    public function event()
    {
      return $this->belongsToMany('App\Models\Event');
    }

    public function dj()
    {
      return $this->belongsToMany('App\Models\Dj');
    }

    public function eventmanager()
    {
      return $this->belongsToMany('App\Models\Eventmanager');
    }
}
