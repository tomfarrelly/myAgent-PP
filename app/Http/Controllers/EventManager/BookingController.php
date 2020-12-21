<?php
# @Author: tomfarrelly
# @Date:   2020-12-17T01:27:08+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-20T20:31:44+00:00




namespace App\Http\Controllers\EventManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dj;
use App\Models\Event;
use App\Models\Booking;

use App\Models\User;
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
    public function create($id)
    {
      $event = Event::findOrFail($id);
      $dj = Dj::findOrFail($id);

      return view('eventmanager.events.bookings.create', [
        'event' => $event
    
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

      $booking->event_id = $id;
      $booking->dj_id = $id;
      $booking->status= $request->has('status');
      $booking->save();


       return redirect()->route('eventmanager.events.index', $id);



      // $request->validate([
      //   'user_id' => 'required|integer',
      //   'event_id' => 'required|integer',
      //   'date' => 'required|date',
      //   'time' => 'date_format:H:i',//makes sure that the one you are adding to the DB is unique
      //   'description' => 'required|max:191',
      // ]);
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
