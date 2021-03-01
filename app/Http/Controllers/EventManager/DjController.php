<?php
# @Author: tomfarrelly
# @Date:   2021-02-04T14:22:02+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-01T18:54:07+00:00




namespace App\Http\Controllers\EventManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dj;
use App\Models\Booking;
use App\Models\Availability;
use App\Models\Event;
use App\Models\Genre;
use Carbon\Carbon;
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

/********************************************************************
        $date_start = Carbon::today();
        $date_end = Carbon::tomorrow();



        //
        // $djs = Dj::whereHas('availability', function ($q) use ($date_start, $date_end) {
        //     $q->where(function ($q2) use ($date_start, $date_end) {
        //         $q2->whereDate('date_start', '>', $date_start)
        //            ->orWhereDate('date_end', '<' ,$date_end);
        //     });
        //   })->orWhereDoesntHave('availability')->get();

          //
          // $djs = Availability::where('date_start', '>'||'=', $date_start)
          //                    ->where('date_end', '<'||'=', $date_end)
          //                    ->get();
 ********************************************************************/

 // $date = Event::findOrFail($id);

 $date = Carbon::today();

//$dj_id = $request->input('dj_id');

$djs = Dj::whereHas('availability', function ($q) use ($date) {
    $q->where(function ($q2) use ($date) {
        $q2->whereDate('date_start', '>', $date)
           ->orWhereDate('date_end', '<' ,$date);
    });
  })->orWhereDoesntHave('availability')->get();

 // $djs = Dj::whereHas('availability')
 //          ->whereDate('date_start', '>', $date)
 //            ->orWhereDate('date_end', '<' ,$date)->get();
          // ->orWhereDoesntHave('availability')->get();

 // $date = Carbon::today();
 //
 // $djs = Availability::where('dj_id','=',$request->dj_id)
 //         ->whereBetween('date_start', '>', array($date))
 //            ->orWhereBetween('date_end', '<' ,array($date))
 //            ->orWhereDoesntHave('dj')->get();

//
// $djs = Availability::where('dj_id','=',$request->dj_id)
//     ->whereBetween('date_start', array($date))
//     ->whereBetween('date_end', array($date))
//     ->get();


     return view('eventmanager.djs.available',[
       //'bookings' => $bookings,
       'djs' => $djs,
       //'bookings' => $bookings
     ]);
   }


   public function search(Request $request)
   {

      // $genres = Genre::with('dj')
      // ->whereHas('dj')
      //   ->where('name','LIKE',"%{$str}%")
      // //  ->where('dj_id','=','genre_id')
      // ->get();

      // $str = $request->str;
      // $genres = Genre::get();
      //
      //   $djs = Dj::get();
      //   if ($request->genre) {
      //       $djs = $djs->whereIn('genre', $str->name)->get();
      //     //  ->where('name','LIKE',"%{$request}%")->get();
      //   }
        //return $djs;

        // if ($request->gender) {
        //   $products = $products->whereIn('gender', $request->gender);
        // }
        //return $djs;



//       $users = User::whereHas('roles' => function($q){
//     $q->where('name', 'admin');
// })->get();







     // $djs = Dj::all();
     // return view('eventmanager.djs.search', [
     //   'djs' => $djs
     // ]);

     // $djs = Genre::whereHas('dj');
     //
     //  if ($request->has('genre_id')) {
     //      $query->with('genre_id' ,$request->genre->name="jungle");
     //  }

      // if ($request->has('city_id')) {
      //     $query->where('city_id', $request->city_id);
      // }

      //  return  $djs->get();
      // $str = $request->str;
      // $djs = Dj::with(['genre'])->get();
      //  $genres = Genre::with(['dj'])
      //     ->where('name','LIKE',"%{$str}%")->get();

          // **************************************
            // $str = $request->str;
            // $djs = Dj::with(['genre'])
            //   ->where('name','LIKE','%'.$str.'%')
            // ->get();
          // // //  ->whereHas('genre')->where('name','LIKE',"%{$str}%")

          // ***************************************
            //$q-> Genre::with(['dj'])  ->where('name','LIKE',"%{$str}%")->get();
        //$genres = Genre::with(['dj'])->get();
       //$genres = Genre::with('dj')->get();



       $genres = Genre::where( function($query) use($request){
                     return $request->genre_id ?
                            $query->from('genres')->where('id',$request->genre_id) : '';
                })->with('dj')->get();

                $selected_id = [];
                $selected_id['genre_id'] = $request->genre_id;







       // $str = $request->str;
       //  $djs = Dj::with(['genre'], function ($q) use ($str) {
       //      $q->where("name",'LIKE',"%{$request->str}%");
       //    })->get();

          //
          // $str = $request->str;
          // $genres = Genre::where("name",'LIKE',"%{$request->str}%")
          //         ->with('dj')->get();

     return view('eventmanager.djs.search', [
       //'djs'=>$djs,
        'genres'=>$genres,
        'selected_id'=>$selected_id
     ]);

}


// ->orWhereHas('genre' function ($q) use ($str){
// $q->where('name', $str);
//  });
// $genres = Genre::with('dj', function ($q) use ($str) {
//
//         $q->where('name','LIKE',"%{$str}%");
//
//     })->get();

// $products = Product::where('product_status', 'ACTIVE')
//             ->with('images')
//             ->whereHas('productTags', function($query) use($filter) {
//                 $query->where('slug', $filter);
//             })
//             ->when($subfilter != '', function($query) use ($subfilter) {
//                 $query->whereHas('productTags', function($query) use($subfilter) {
//                     $query->where('slug', $subfilter);
//                 });
//             })
//             ->paged($page);

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
