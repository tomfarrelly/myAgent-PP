<?php
# @Author: tomfarrelly
# @Date:   2021-05-11T16:18:31+01:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-05-12T17:28:48+01:00



namespace App\Http\Controllers\Dj;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Availability;
use App\Models\Dj;

class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('dj.availability.create');
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
        'date_start' => 'required|date|date_format:Y-m-d',
        'date_end' => 'required|date|date_format:Y-m-d',

      ]);

      $dj_id = Dj::where('user_id', auth()->id())->get(['id'])->pluck('id')->implode('id');

      $availability = new Availability;
      $availability->dj_id = $dj_id;
      $availability->date_start=$request->input('date_start');
      $availability->date_end=$request->input('date_end');
      $availability->save();

      //return redirect()->back()->with('status','Dates Updated');

      return redirect()->route('dj.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
