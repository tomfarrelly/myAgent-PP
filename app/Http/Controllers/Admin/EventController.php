<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:30:48+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-05-14T20:38:48+01:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Venue;
use App\Models\Genre;
use App\Models\User;
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
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $events = Event::all();

      return view('admin.events.index', [
        'events' => $events
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         $venues = Venue::all();
         $types = Genre::all();

         // Getting all Users with the Event Manager role
         $users = User::whereHas('roles', function($role) {
              $role->where('name', '=', 'eventManager');
          })->get();



         return view('admin.events.create',[
           'venues' =>$venues,
           'types' =>$types,
           'users' =>$users

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
         'time' => 'date_format:H:i',
         'type_id' => 'required',
         'cover' => 'file|image',
         'user_id' => 'required|exists:users,id',

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
       $event->type_id=$request->input('type_id');
       $event->user_id=$request->input('user_id');



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
      $event = Event::findOrFail($id);

      return view('admin.events.show',[
        'event' => $event
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

        return view('admin.events.edit',[
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
          'venue' => 'required|max:191',
          'date' => 'required|date',
          'time' => 'required|date_format:H:i',
          'type' => 'required',
          'cover' => 'file|image',
          'user_id' => 'required|integer',

        ]);

        // If a cover for the event already exists it gets deleted
        //
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

        return redirect()->route('admin.events.index');
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

        return redirect()->route('admin.events.index');
    }
}
