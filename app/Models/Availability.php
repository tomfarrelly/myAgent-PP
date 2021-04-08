<?php
# @Author: tomfarrelly
# @Date:   2021-03-15T15:31:24+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-04-07T19:32:45+01:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Availability extends Model
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
         'date_start',
         'date_end',
     ];


     public function dj()
     {
       return $this->belongsToMany('App\Models\Dj','dj_id');
     }
}
