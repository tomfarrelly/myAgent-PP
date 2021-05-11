<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:20:03+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-05-11T19:18:50+01:00




namespace App\Http\Controllers\Dj;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
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
       // $user = Auth::user();
       // $user->authorizeRoles(['admin']);

       //$events = Event::all();
       //$events = Event::where('dj_id', auth()->id())->get();



       $bookings = Booking::whereHas('event')
          ->where('dj_id', auth()->id())->get('event_id');
      //  })->orWhereDoesntHave('availability')->get();

        return view('dj.home',[
          'bookings' => $bookings
        ]);
    }

    // public function myEvents()
    // {
    //    // $events = Event::where('dj_id', auth()->id())->get();
    //    $events = Event::all()->get();
    //
    //
    //     return view('dj.home',[
    //       'events' => $events
    //     ]);
    // }
}
