<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-04-07T20:23:00+01:00




namespace App\Http\Controllers\EventManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dj;
use App\Models\Booking;
use App\Models\Availability;
use App\Models\Event;
use App\Models\Genre;
use Carbon\Carbon;
use App\Models\User;
use Symfony\Component\Console\Input\Input;


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

    public function available(){


 $date = Carbon::today();

 $djs = Dj::whereHas('availability', function ($q) use ($date) {
    $q->where(function ($q2) use ($date) {
        $q2->whereDate('date_start', '>', $date)
           ->orWhereDate('date_end', '<' ,$date);
    });
  })->orWhereDoesntHave('availability')->get();


     return view('eventmanager.djs.available',[
       'djs' => $djs,
     ]);
   }


   public function search(Request $request)
   {
     $genres = Genre::where( function($query) use($request){
                        return $request->genre_id ?
                               $query->from('genres')->where('id',$request->genre_id) : '';

                   })->with('dj')->get();


         // echo($genres);
        if($request->genres){
           $genres->whereHas('id',function($q) use ($request){
           $q->where('name',$request->genre_id);
          });

        }

          return view('eventmanager.page.search',[
            'genres' => $genres
          ]);

     }






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
