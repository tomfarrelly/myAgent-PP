<?php
# @Author: tomfarrelly
# @Date:   2020-12-17T01:13:10+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-17T01:17:08+00:00




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
    // protected $fillable = [
    //     'name',
    //     'description',
    //     'venue',
    //     'date',
    //     'time',
    //     'type',
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $primaryKey = 'id';
    protected $hidden = [
        'user_id',
        'event_id',
        'completed',
        'cancelled',
    ];

    public function users()
    {
      return $this->belongsToOne('App\Models\User', 'user_id');

    }

    public function events()
    {
      return $this->belongsToOne('App\Models\Event', 'event_id');

    }
}
