<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:30:18+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-14T23:42:15+00:00




namespace App\Http\Controllers\EventManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Dj;
use App\Models\Booking;
use App\Models\Genre;
use Carbon\Carbon;
use Auth;

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
    public function index()
    {
      $event = Event::all();

      $id = Auth::user()->id;
      $events = $event->where('user_id', $id);

        return view('eventmanager.events.index', [
          'events' => $events,
        //  'djs' => $djs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventmanager.events.create');
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
        'description' => 'required|max:191',
        'venue_id' => 'required|integer',
        'date' => 'required|date',
        'time' => 'date_format:H:i',//makes sure that the one you are adding to the DB is unique
        'type' => 'required',
        'cover' => 'file|image',
        //'cover'=> 'file|image',
        'user_id' => 'required|integer',
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
      $event->venue_id=$request->input('venue_id');
      $event->date=$request->input('date');
      $event->time=$request->input('time');
      $event->type=$request->input('type');
      $event->user_id=$request->input('user_id');

      $event->save();

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

        $events = Event::findOrFail($id);

        $djs = Booking::where('event_id', $id)->get();


        return view('eventmanager.events.show',[
          'events' => $events,
        //  'djs' => $djs,
          'djs' => $djs
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

      return view('eventmanager.events.edit',[
        'event' => $event
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
        'description' => 'required|max:191',
        'venue_id' => 'required|integer',
        'date' => 'required|date',
        'time' => 'required|date_format:H:i',//makes sure that the one you are adding to the DB is unique
        'type' => 'required',
        'cover' => 'file|image',
        'user_id' => 'required|integer',
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
      $event->venue_id=$request->input('venue_id');
      $event->date=$request->input('date');
      $event->time=$request->input('time');
      $event->user_id=$request->input('user_id');

      $event->save();

      return redirect()->route('eventmanager.events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $event = Event::findOrFail($id);
      $event->delete();

      return redirect()->route('eventmanager.events.index');
    }

    public function availableDj($id){

      $event = Event::findOrFail($id);
      $e_date = $event->date;

     //$dj_id = $request->input('dj_id');

     $djs = Dj::whereHas('availability', function ($q) use ($e_date) {
         $q->where(function ($q2) use ($e_date) {
             $q2->whereDate('date_start', '>', $e_date)
                ->orWhereDate('date_end', '<' ,$e_date);
         });
       // });
        })->orWhereDoesntHave('availability')->get();

       return view('eventmanager.events.availableDj',[

         'djs' => $djs,

       ]);
    }

    public function past(){

      $date = Carbon::today();
      $events = Event::where('date', '<' ,$date)->get();


       return view('eventmanager.events.past',[

         'events' => $events,

       ]);
    }

    public function search(Request $request)
    {

        $genres = Genre::where( function($query) use($request){
                      return $request->genre_id ?
                             $query->from('genres')->where('id',$request->genre_id) : '';
                 })->with('event')->get();

                 $selected_id = [];
                 $selected_id['genre_id'] = $request->genre_id;


      return view('eventmanager.events.search', [

         'genres'=>$genres,
         'selected_id'=>$selected_id
      ]);

 }


}
