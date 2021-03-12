<?php

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
       return $this->belongsToMany('App\Models\Dj', 'dj_genres');
     }

     public function event()
     {
       return $this->belongsToMany('App\Models\Event', 'event_genres');
     }
}
