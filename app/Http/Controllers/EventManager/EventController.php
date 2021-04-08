<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:30:18+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-04-08T17:22:29+01:00




namespace App\Http\Controllers\EventManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

use Auth;
use App\Models\User;
use App\Models\Event;
use App\Models\Dj;
use App\Models\Booking;
use App\Models\Venue;
use App\Models\Genre;
use Carbon\Carbon;


use Illuminate\Support\Facades\File;

class EventController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
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





    public function index(Request $request)
    {



        $types = Genre::all();

        $events = Event::all();
        
        $date = Carbon::today();

        $pastevents = Event::where('date', '<' ,$date)->get();
        $futureevents = Event::where('date', '>=' ,$date)->get();

        $data['venues'] = Venue::orderBy('id')->get();
        $post_query = Event::where('user_id',auth()->id());
        $post_query = Event::where('date', '>=' ,$date);




      if($request->venue){
         $post_query->whereHas('venue',function($q) use ($request){
         $q->where('name',$request->venue);
        });
      }

      if($request->keyword){
       $post_query->where('name','LIKE','%'.$request->keyword.'%');
      }

      if(isset($_GET['sort']) && !empty($_GET['sort'])){
        if($_GET['sort']=="event_name_a_z"){
       $post_query->orderBy('name', 'ASC');
        }
        else if($_GET['sort']=="event_name_z_a") {

         $post_query->orderBy('name', 'Desc');
       }else if($_GET['sort']=="event_date_>") {

         $post_query->orderBy('date', 'Asc');
       }else if($_GET['sort']=="event_date_<") {

         $post_query->orderBy('date', 'Desc');
       }else if($_GET['sort']=="event_time_>") {

         $post_query->orderBy('time', 'Asc');
       }else if($_GET['sort']=="event_time_<") {

         $post_query->orderBy('time', 'Desc');
        }
        else {

        }

      }

      $data['futureevents']=$post_query->orderBy('id','ASC')->paginate(20);



        return view('eventmanager.home',$data, [
          'futureevents' => $futureevents,
          'pastevents' =>$pastevents,
          'data' => $data,
          'types' =>$types
        ]);


    }

    // public function getMoreEvents(Request $request) {
    //     $query = $request->search_query;
    //     $venue = $request->venue;
    //     $sort_by = $request->sort_by;
    //     if($request->ajax()) {
    //         $$futureevents = Event::getEvents($query, $venue, $sort_by,);
    //             return view('pages.event_data', compact('$futureevents'))->render();
    //     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venues = Venue::all();
        $types = Genre::all();
        return view('eventmanager.events.create',[
          'venues' =>$venues,
          'types' =>$types

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
       $request->validate([
         'name' => 'required|max:191',
         'description' => 'required',
         'venue_id' => 'required',
         'date' => 'required|date',
         'time' => 'date_format:H:i',//makes sure that the one you are adding to the DB is unique
         'genre_id' => 'required',
         'cover' => 'file|image',
         //'cover'=> 'file|image',

       ]);

       $event = new  Event();

       if($request->hasfile('cover'))
     {
       $destination = 'uploads/event/' .$event->cover;
       if(File::exists($destination)){
          File::delete($destination);
       }
       $file = $request->file('cover');
       $extension = $file->getClientOriginalExtension();
       $filename = time() . '.' . $extension;
       $file->move('uploads/event/',$filename);
       $event->cover = $filename;
     }


       $event->name=$request->input('name');
       $event->description=$request->input('description');
       $event->venue_id = $request->input('venue_id');
       $event->date=$request->input('date');
       $event->time=$request->input('time');
       $event->genre_id=$request->input('genre_id');
       $event->user_id = auth()->id();

       $event->save();

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

        $events = Event::findOrFail($id);

        $bookings = Booking::where('event_id', $id)->get();


        return view('eventmanager.events.show',[
          'events' => $events,
        //  'djs' => $djs,
          'bookings' => $bookings
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

      $event = Event::findOrFail($id);
      $venues = Venue::all();
      $types = Genre::all();
      $bookings = Booking::where('event_id', $id)->get();
      return view('eventmanager.events.edit',[
        'event' => $event,
        'venues'=> $venues,
        'types'=> $types,
        'bookings' => $bookings
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
       $event = Event::findOrFail($id);

       $request->validate([
         'name' => 'required|max:191',
         'description' => 'required',
         'venue_id' => 'required',
         'date' => 'required|date',
         'time' => 'date_format:H:i:s',//makes sure that the one you are adding to the DB is unique
         'type_id' => 'required',
         'cover' => 'file|image',
         //'cover'=> 'file|image',

       ]);



       if($request->hasfile('cover'))
     {
       $destination = 'uploads/event/' .$event->cover;
       if(File::exists($destination)){
          File::delete($destination);
       }
       $file = $request->file('cover');
       $extension = $file->getClientOriginalExtension();
       $filename = time() . '.' . $extension;
       $file->move('uploads/event/',$filename);
       $event->cover = $filename;
     }


       $event->name=$request->input('name');
       $event->description=$request->input('description');
       $event->venue_id = $request->input('venue_id');
       $event->date=$request->input('date');
       $event->time=$request->input('time');
       $event->genre_id=$request->input('genre_id');
       $event->user_id = auth()->id();

       $event->save();

     return redirect()->route('eventmanager.home');
     }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request ,$id)
     {
         $event = Event::findOrFail($id);

         $event->delete();



         return redirect()->route('eventmanager.home');
     }

}
