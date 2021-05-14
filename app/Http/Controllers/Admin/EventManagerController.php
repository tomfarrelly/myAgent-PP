<?php
# @Author: tomfarrelly
# @Date:   2021-03-15T00:31:08+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-05-14T21:08:33+01:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Hash;

class EventManagerController extends Controller
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
      

      $evManagers = User::whereHas(
        'roles', function($q){
            $q->where('name', 'eventManager');
          })->get();





      return view('admin.eventmanagers.index', [
        'evManagers' => $evManagers
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eventmanagers.create');
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
        'email' => 'required|max:191',
        'password' => 'required|integer',
        'bio' => 'required|date',
        'location' => 'date_format:H:i',
        'username' => 'required',

      ]);

      // Getting role name from Roles table
      $role_eventManager = Role::where('name','eventManager')->first();

      $evManager = new  User();

      $evManager->name=$request->input('name');
      $evManager->email=$request->input('email');
      $evManager->password=Hash::make($request->input('password'));
      $evManager->bio=$request->input('bio');
      $evManager->location=$request->input('location');
      $evManager->username=$request->input('username');

      $evManager->save();

      $evManager->roles()->attach($role_eventManager);

      return redirect()->route('admin.eventmangers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $evManager = User::findOrFail($id);

      return view('admin.eventmanagers.show',[
        'evManager' => $evManager
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
      $evManager = User::findOrFail($id);

      return view('admin.eventmanagers.edit',[
        'evManager' => $evManager
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
      $request->validate([
        'name' => 'required|max:191',
        'email' => 'required',
        'password' => 'required',
        'bio' => 'required|date',
        'location' => 'required|max:252',
        'username' => 'required',

      ]);
      $evManager = User::findOrFail($id);

      $evManager->name=$request->input('name');
      $evManager->email=$request->input('email');
      $evManager->password=Hash::make($request->input('password'));
      $evManager->bio=$request->input('bio');
      $evManager->location=$request->input('location');
      $evManager->username=$request->input('username');

      $evManager->update();


      return redirect()->route('admin.eventmanagers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {



      $evManager = User::findOrFail($id);
      $ev_Manager = User::findOrFail($evManager->id);


      return redirect()->route('admin.eventmanagers.index');
    }
}
