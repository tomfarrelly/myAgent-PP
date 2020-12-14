<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T16:30:48+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-13T23:43:11+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

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
        return view('admin.events.create');
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
          'venue' => 'required|max:191',
          'date' => 'required|date',
          'time' => 'date_format:H:i',//makes sure that the one you are adding to the DB is unique
          'type' => 'required',
          'user_id' => 'required|integer',
        ]);

        $event = new  Event();
        $event->name=$request->input('name');
        $event->description=$request->input('description');
        $event->venue=$request->input('venue');
        $event->date=$request->input('date');
        $event->time=$request->input('time');
        $event->type=$request->input('type');
        $event->user_id=$request->input('user_id');
        $event->save();

        return redirect()->route('admin.events.index');
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
          'time' => 'required|date_format:H:i',//makes sure that the one you are adding to the DB is unique
          'type' => 'required',
          'user_id' => 'required|integer',
        ]);


        $event->name=$request->input('name');
        $event->description=$request->input('description');
        $event->venue=$request->input('venue');
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
