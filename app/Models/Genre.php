<?php
# @Author: tomfarrelly
# @Date:   2021-03-15T15:31:24+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-04-06T23:20:48+01:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $primaryKey = 'id';
     protected $fillable = [
         'name',
         'description',
     ];


     public function dj()
     {
       return $this->hasMany('App\Models\Dj', 'dj_genres');
     }

     public function event()
     {

       return $this->hasOne('App\Models\Event', 'genre_id');

     }
}
