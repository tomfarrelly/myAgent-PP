<?php
# @Author: tomfarrelly
# @Date:   2020-10-30T15:07:53+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-01-13T17:35:23+00:00




namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'bio',
        'genre',
        'location',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function profile()
    {
    return $this->hasOne('Profile');
    }

    public function roles()
    {
      return $this->belongsToMany('App\Models\Role', 'user_role');

    }

    public function authorizeRoles($roles)
    {
      if (is_array($roles)){

        return $this->hasAnyRole($roles);
      }
      return $this->hasRole($roles);
    }

    public function hasAnyRole($roles)
    {
      return null !== $this->roles()->whereIn('name', $roles)->first();
    }



    public function hasRole($role)
    {
      return null !== $this->roles()->where('name', $role)->first();
    }

    public function dj()
    {
      return $this->hasOne('App\Models\Dj');
    }

    public function eventmanager()
    {
      return $this->hasOne('App\Models\Patient');
    }


}
