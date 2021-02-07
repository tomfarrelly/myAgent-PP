<?php
# @Author: tomfarrelly
# @Date:   2021-02-07T15:42:46+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-02-07T16:33:34+00:00




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

     public function Dj()
     {
       return $this->belongsToMany('App\Models\Dj');
     }

     public function event()
     {
       return $this->belongsToMany('App\Models\Event');
     }
}
