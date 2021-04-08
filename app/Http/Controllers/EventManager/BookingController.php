<?php
# @Author: tomfarrelly
# @Date:   2020-12-17T01:27:08+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-04-08T17:22:30+01:00




namespace App\Http\Controllers\EventManager;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Dj;
use App\Models\Event;
use App\Models\Booking;
use App\Models\Availability;
use App\Models\User;
use Carbon\Carbon;
use Auth;

class BookingController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:eventManager,admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bookings = Booking::all();

         return view('eventmanager.events.bookings.index',[
           'bookings' => $bookings
         ]);

         //->withBookings($bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $events = Event::all();
      $djs = Dj::all();



      return view('eventmanager.events.bookings.create', [

        'events' => $events,
        'djs' => $djs


      ]); //compact('djs')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //$date_ev = Event::where('id', $booking->event_id)->get(['date'])->pluck('date')->implode('date');
     //dd($date_ev);
     //$date_end = Event::where('id', $booking->event_id)->select("date")->first();
   //  $timezone = new DateTimeZone($_SESSION['Europe/Dublin']);
     //$format = 'Y-m-d';
//dd($date_ev.date);
     //dd(strtotime($date_ev));
     //date('Y-m-d', strtotime($date_ev))
     //dd(date('Y-m-d', strtotime($date_ev)));

    public function store(Request $request, $id)
    {
      $booking = new Booking();
      $booking->event_id=$request->input('event_id');
      $booking->dj_id=$request->input('dj_id');
      $booking->status= $request->has('status');

      if ($request->has('status') == 1)
      {
        $availability = new Availability;

        $availability->dj_id = $booking->dj_id;
        $availability->date_start = Event::where('id', $booking->event_id)->get(['date'])->pluck('date')->implode('date');
        $availability->date_end = Event::where('id', $booking->event_id)->get(['date'])->pluck('date')->implode('date');

        $availability->save();

        return redirect()->route('eventmanager.home');

      }else{

        $booking->save();

      }
      
       return redirect()->route('eventmanager.home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
