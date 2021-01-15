<?php
# @Author: tomfarrelly
# @Date:   2020-12-20T14:57:19+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-20T17:55:33+00:00




namespace App\Http\Controllers;

use App\Models\DjEvent;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Dj;

class DjEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dj_event = DjEvent::all();

      return view('eventmanager.djevent.index',[
        'dj_event' => $dj_event
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $event = Event::findOrFail($id);

      return view('eventmanager.djevent.create', [
        'event' => $event
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DjEvent  $djEvent
     * @return \Illuminate\Http\Response
     */
    public function show(DjEvent $djEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DjEvent  $djEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(DjEvent $djEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DjEvent  $djEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DjEvent $djEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DjEvent  $djEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(DjEvent $djEvent)
    {
        //
    }
}
