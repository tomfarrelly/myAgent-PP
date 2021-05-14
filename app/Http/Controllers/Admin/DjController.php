<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-05-14T20:26:22+01:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dj;
use App\Models\Booking;
use App\Models\Availability;
use App\Models\Event;
use App\Models\Genre;
use Carbon\Carbon;
use App\Models\User;
use Auth;
use Symfony\Component\Console\Input\Input;


class DjController extends Controller
{

    public $sorting;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $djs = Dj::all();

      return view('admin.dj.index', [
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

      return view('admin.dj.show',[
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

 /

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

   if($request->genres){
      $genres->whereHas('id',function($q) use ($request){
      $q->where('name',$request->id);
     });

   }

   if($request->keyword){
    $genres->where('name','LIKE','%'.$request->keyword.'%');
   }



     if(isset($_GET['sort']) && !empty($_GET['sort'])){
       if($_GET['sort']=="djprice_lowest"){
       $genres->orderBy('id', 'Asc' );
       }
       else {

       }

}


     return view('eventmanager.page.search',[
       'genres' => $genres,


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
         $dj = Dj::findOrFail($id);

         return view('admin.dj.edit',[
           'dj' => $dj
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
       

       $dj = Dj::findOrFail($id);
       $dj->user->name = $request->input('name');
       $dj->user->email = $request->input('email');
       $dj->user->username = $request->input('username');
       $dj->user->bio = $request->input('bio');
       $dj->user->genre = $request->input('genre_id');
       $dj->user->location = $request->input('location');


       $dj->user->save();

       return redirect()->route('admin.dj.index');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         $dj = Dj::findOrFail($id);
         $dj->delete();

         return redirect()->route('admin.dj.index');
     }


}
