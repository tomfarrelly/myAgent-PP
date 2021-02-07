<?php
# @Author: tomfarrelly
# @Date:   2021-02-04T14:22:02+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-02-04T15:53:31+00:00




namespace App\Http\Controllers\EventManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dj;
use App\Models\Booking;
use App\Models\Availability;
use Carbon\Carbon;


class DjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $djs = Dj::all();

      return view('eventmanager.page.index', [
        'djs' => $djs
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $dj = Dj::findOrFail($id);

      return view('eventmanager.djs.show',[
        'dj' => $dj
      ]);
    }

    public function available(Request $request){

      //$booking = Booking::all();

      //$djs = Dj::whereNotIn('bookings', [])->get();
     // $djs = Dj::findOrFail($id)->booking()->where('dj_id', '!=', $id)->get();
      //User::find($id)->games()->where('user_id', '!=', $id)->get();

     // $djs = Dj::doesntHave('booking')->where('dj_id', '!=', $id)->get();

     //  $date = $request->input('date');
      //
      //   $bookings = Booking::whereNotIn('event_id', function($query) use ($date) {
      //     $query->from('bookings')
      //      ->select('event_id')
      //      ->whereDate('date_booked', '!=', $date);
      //  })->get();

       //$djs = Dj::doesntHave('booking')->get();

      // $djs = Dj::with('bookings')->whereHas('bookings', function (Query $query) use ($date) {``
      //                 $query->where(function ($q2) use ($date) {
      //                     $q2->where('date', '!=', $date);
      //                 }

      /* WORKS */
      // $date_booked = $request->input('date_booked');
      //
      // $djs = Dj::with('booking')->whereHas('booking', function ($q) use ($date_booked) {
      //   $q->where('date_booked', '!=', Carbon::today());
      //  })->orWhereDoesntHave('booking')->get();

      // $date = $request->input('date');
      //     /* WORKS */
      // $djs = Dj::with('boooking')->whereHas('event', function ($q) use ($date) {
      //   $q->where('date', '!=', Carbon::today());
      //  })->get();


          // $date_start = $request->input('date_start');
          // $date_end = $request->input('date_end');
         //
         //
         //     $djs = Dj::with('booking','availability')->whereHas('booking', function ($q) use ($date_booked,$date_start, $date_end) {
         //         $q->where(function ($q2) use ($date_booked,$date_start, $date_end) {
         //             $q2->where('date_booked', '!=', Carbon::today())
         //             //   ->orWhere('date_start', '>=', $date_start)
         //                ->orWhere('date_end', '<=', $date_end);
         //         });
         //     })->orWhereDoesntHave('booking')->get();

      //$djs = Booking::where('dj_id', '!=', '')->get();
      //$djs = Booking::select('dj_id')->whereNotNull('dj_id');
     // $djs = Dj::all();
      //$bookings = Booking::find()->dj()->where('dj_id', '!=', '0')->get();
      //$djs = Booking::find()->dj()->whereNotIn('bookings', ['*'])->get();
      //$bookings = Booking::where('status', 0)->get();
   //  $bookings = Booking::all()->sortBy('dj_id')->where('status', '=', '0')->get();
     // $date_start = Availability::select('date_start')->get();
     // $date_end = Availability::select('date_end')->get();

        $date_start = Carbon::today();
        $date_end = Carbon::tomorrow();



        $djs = Dj::whereHas('availability', function ($q) use ($date_start, $date_end) {
            $q->where(function ($q2) use ($date_start, $date_end) {
                $q2->whereDate('date_start', '>', $date_start)
                   ->orWhereDate('date_end', '<' ,$date_end);
            });
          })->orWhereDoesntHave('availability')->get();

          //
          // $djs = Availability::where('date_start', '>'||'=', $date_start)
          //                    ->where('date_end', '<'||'=', $date_end)
          //                    ->get();

 //

     return view('eventmanager.djs.available',[
       //'bookings' => $bookings,
       'djs' => $djs,
       //'bookings' => $bookings
     ]);
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
