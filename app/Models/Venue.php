<?php
# @Author: tomfarrelly
# @Date:   2021-02-07T17:31:44+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-15T00:21:55+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'location',
        'capacity',
        'services',
    ];

    public function event()
    {
      return $this->hasMany('App\Models\Event', 'venue_id');
    }
}
