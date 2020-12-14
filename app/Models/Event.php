<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:15:23+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-13T19:51:23+00:00




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
        'user_id'
    ];

    public function users()
    {
      return $this->belongsToOne('App\Models\User', 'user_id');

    }
}
