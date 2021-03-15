<?php
namespace App\Http\Controllers\Dj;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dj;
use App\Models\Event;
use App\Models\Booking;
use App\Models\Availability;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // if ('status' == 0){
      // $bookings = Booking::all()->where('dj_id' == Auth::user()->id);

      // $info = Booking::with('event')->pluck('event_id');
      //  dd($info);
      // $events = DB::table('events')->where('id', $info)->get();



    //  $event = Event::findOrFail($id);

      //$bookings = Booking::where('dj_id', $id)->get();

      // $bookings = Booking::where('dj_id', $id)->get();

//

      // $events = Event::with('booking', function ($q) use ($info) {
      //     $q->where('id', $info);
      //   })->get()->implode();

      // foreach (Auth::user()->dj->booking[0]$ $value) {
        // code...
      // }
      // dd(Auth::user()->dj->booking);



        //dd($events);

      //dd($bookings);

      // $events = Event::where( function($query) use($request){
      //                      $query->from('events')->where('id', $id);
      //          })->with('booking')->get();
      //          dd($events);

      $id = Auth::user()->dj->id;



      return view('dj.bookings.index',[
        'bookings' => Auth::user()->dj->booking->where('status', '0'),
        'confirmedBookings' => Auth::user()->dj->booking->where('status', '1'),
      ]);
    //}
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



      return view('dj.bookings.create', [

        'events' => $events,
        'djs' => $djs


      ]);
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
        $availability->date_start = Event::where('id', $booking->event_id)->get(['date'])->pluck('date')->implode('date');
        $availability->date_end = Event::where('id', $booking->event_id)->get(['date'])->pluck('date')->implode('date');

        $booking->destroy($id);
        $booking->save();
        $availability->save();


        return redirect()->route('dj.bookings.index');

      }else{

        $booking->update();

      }

       return redirect()->route('dj.bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $events = Event::findOrFail($id);
      //
      // $djs = Booking::where('event_id', $id)->get();
      //
      //
      // return view('dj.events.show',[
      //   'events' => $events,
      // //  'djs' => $djs,
      //   'djs' => $djs
      // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $booking = Booking::findOrFail($id);
      // $events = Event::findOrFail();
      // $djs = Dj::findOrFail($id);//->pluck('name','date','decription','venue', 'user_id')->get();
      //dd($events);
      return view('dj.bookings.edit',[
        'bookings' => $booking
        // 'events' => $events,
        // 'djs' => $djs
      ]);

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
      $booking = Booking::findOrFail($id);


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

        return redirect()->route('dj.bookings.index');

      }else{

        $booking->save();

      }

       return redirect()->route('dj.bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $booking = Booking::findOrFail($id);
      $booking->delete();

      return redirect()->route('dj.bookings.index');
    }
}
