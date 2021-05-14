<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:20:03+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-05-14T20:27:33+01:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
}
