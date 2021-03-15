<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-14T23:49:57+00:00




namespace App\Http\Controllers\Dj;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Dj;

class ProfileController extends Controller
{
   public function myprofile()
   {
      return view('dj.page.profile');
   }

   public function myprofileupdateDJ(Request $request)
   {
      $user_id = Auth::user()->id;
      $user = User::findOrFail($user_id);
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->username = $request->input('username');
      $user->bio = $request->input('bio');
      $user->genre = $request->input('genre');
      $user->location = $request->input('location');
      $user->dj->price = $request->input('price');


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

      if($request->hasfile('track1'))
      {
        $destination = 'uploads/profile/music/' .$user->dj->track1;
        if(File::exists($destination)){
           File::delete($destination);
        }
        $file = $request->file('track1');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/profile/music/',$filename);
        $user->dj->track1 = $filename;
      }

      if($request->hasfile('track2'))
      {
        $destination = 'uploads/profile/music/' .$user->dj->track2;
        if(File::exists($destination)){
           File::delete($destination);
        }
        $file = $request->file('track2');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/profile/music/',$filename);
        $user->dj->track2 = $filename;
      }

      if($request->hasfile('track3'))
      {
        $destination = 'uploads/profile/music/' .$user->dj->track3;
        if(File::exists($destination)){
           File::delete($destination);
        }
        $file = $request->file('track3');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/profile/music/',$filename);
        $user->dj->track3 = $filename;
      }

      $user->dj->update();
      return redirect()->back()->with('status','Profile Updated');
   }

   public function myprofileupdateEM(Request $request)
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

   public function myprofileUnavailableDate(Request $request)
   {
     $user_id = Auth::user()->id;
     $user = User::findOrFail($user_id);

   }

}
