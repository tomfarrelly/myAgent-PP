<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:20:03+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-05-14T21:21:45+01:00




namespace App\Http\Controllers\Dj;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Dj;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:dj');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


       $dj_id = Dj::where('user_id', auth()->id())->pluck('id');


       $bookings = Booking::whereHas('event')
          ->where('dj_id', $dj_id)->get('event_id');


        return view('dj.home',[
          'bookings' => $bookings
        ]);
    }

    
}
