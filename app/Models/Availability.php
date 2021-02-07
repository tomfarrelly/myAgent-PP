<?php
# @Author: tomfarrelly
# @Date:   2021-01-24T15:05:14+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-01-29T12:36:04+00:00




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
     // protected $hidden = [
     //
     //   ];

     public function dj()
     {
       return $this->belongsToMany('App\Models\Dj','dj_id');
     }
}
