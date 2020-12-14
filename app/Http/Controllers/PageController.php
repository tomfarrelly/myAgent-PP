<?php
# @Author: tomfarrelly
# @Date:   2020-12-13T17:13:31+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-13T17:34:45+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
      return view('welcome');
    }

    public function about()
    {
      return view('about');
    }

}
