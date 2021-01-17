<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-01-17T16:48:41+00:00




namespace App\Http\Controllers\EventManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Dj;
use App\Models\Booking;


class ProfileController extends Controller
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

  public function index()
  {

      $djs = Dj::all();

      return view('eventmanager.page.index', [
        'djs' => $djs
      ]);
  }


   public function myprofile()
   {
      return view('eventmanager.page.profile');
   }

   public function myprofileupdate(Request $request)
   {
      $user_id = Auth::user()->id;
      $user = User::findOrFail($user_id);
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->username = $request->input('username');
      $user->bio = $request->input('bio');
      $user->genre = $request->input('genre');
      $user->location = $request->input('location');

      if($request->hasfile('image'))
      {
        $destination = 'uploads/profile/' .$user->image;
        if(File::exists($destination)){
           File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/profile/',$filename);
        $user->image = $filename;
      }

      $user->update();
      return redirect()->back()->with('status','Profile Updated');
   }

   public function show($id)
   {
       $dj = Dj::findOrFail($id);

       return view('eventmanager.page.show',[
         'dj' => $dj
       ]);
   }

/**  Displaying available DJs with status = 0 in bookings  **/
   public function availableDj(){

    $bookings = Booking::all()->sortBy('dj_id')->where('status', '=', '0');
    return view('eventmanager.page.availableDj',[
      'bookings' => $bookings,

    ]);
  }
}
