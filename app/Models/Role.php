<?php
# @Author: tomfarrelly
# @Date:   2020-12-08T17:14:35+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-08T19:21:49+00:00




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    use HasFactory;


    public function users()
    {
      return $this->belongsToMany('App\Models\User', 'user_role');
    }
}
