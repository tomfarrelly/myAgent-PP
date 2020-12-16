<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T15:51:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-13T15:54:53+00:00




namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, String $role)
    {
        if(!$request->user() || !$request->user()->hasRole($role)){
           return redirect()->route('home');
        }
      return $next($request);
    }


}
