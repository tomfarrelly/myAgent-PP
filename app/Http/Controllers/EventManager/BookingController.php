<?php
# @Author: tomfarrelly
# @Date:   2020-12-17T01:27:08+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-02-15T18:16:57+00:00




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
        $availability->date_start = Event::whereDateTime('id', $booking->event_id)->select('date')->first();
        $availability->date_end = Event::whereDateTime('id', $booking->event_id)->select('date')->first();




        $availability->save();

        return redirect()->route('eventmanager.events.index');

      }else{

        $booking->save();

      }

       return redirect()->route('eventmanager.events.index');




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
