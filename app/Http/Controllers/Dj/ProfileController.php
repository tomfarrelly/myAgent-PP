<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-16T23:34:05+00:00




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

      $user->update();
      return redirect()->back()->with('status','Profile Updated');
   }
}
