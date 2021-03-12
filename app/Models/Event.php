<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:15:23+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-01-16T14:44:05+00:00




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
      return $this->belongsTo('App\Models\User');

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

    // Get the venue for event.
    public function venue(){
   	return $this->belongsTo('App\Models\Venue');
   }

    public function type()
    {
      return $this->belongsTo('App\Models\Type');
    }

    // public static function getEvents($sort_by, $venue) {
    //     $events = DB::table('$events');
    //
    //
    //     // if($search_keyword && !empty($search_keyword)) {
    //     //     $users->where(function($q) use ($search_keyword) {
    //     //         $q->where('users.fname', 'like', "%{$search_keyword}%")
    //     //         ->orWhere('users.lname', 'like', "%{$search_keyword}%");
    //     //     });
    //     // }
    //
    //     // Filter By Country
    //     if($venue && $venue!= GlobalConstants::ALL) {
    //         $events = $futureevents->where('events.venue', $venue);
    //     }
    //
    //     // Filter By Type
    //     if($sort_by) {
    //         $sort_by = lcfirst($sort_by);
    //         if($sort_by == GlobalConstants::USER_TYPE_T) {
    //             $events = $futureevents->where('$futureevents.type', $sort_by);
    //         } else if($sort_by == GlobalConstants::USER_TYPE_T1) {
    //             $events = $events->where('$futureevents.type', $sort_by);
    //         }
    //         else if($sort_by == GlobalConstants::USER_TYPE_T1) {
    //             $events = $events->where('$futureevents.type', $sort_by);
    //         }
    //         else if($sort_by == GlobalConstants::USER_TYPE_T2) {
    //             $events = $events->where('$futureevents.type', $sort_by);
    //         }
    //         else if($sort_by == GlobalConstants::USER_TYPE_T3) {
    //             $events = $events->where('$futureevents.type', $sort_by);
    //         }
    //         else if($sort_by == GlobalConstants::USER_TYPE_T4) {
    //             $events = $events->where('$futureevents.type', $sort_by);
    //         }
    //         else if($sort_by == GlobalConstants::USER_TYPE_T5) {
    //             $events = $events->where('$futureevents.type', $sort_by);
    //         }
    //         else if($sort_by == GlobalConstants::USER_TYPE_T6) {
    //             $events = $events->where('$futureevents.type', $sort_by);
    //         }
    //         else if($sort_by == GlobalConstants::USER_TYPE_T7) {
    //             $events = $events->where('$futureevents.type', $sort_by);
    //         }
    //         else if($sort_by == GlobalConstants::USER_TYPE_T8) {
    //             $events = $events->where('$futureevents.type', $sort_by);
    //         }
    //         else if($sort_by == GlobalConstants::USER_TYPE_T9) {
    //             $futureevents = $futureevents->where('$futureevents.type', $sort_by);
    //         }
    //     }
    //
    //
    //
    //     return $events->paginate(PER_PAGE_LIMIT);
    // }
}
