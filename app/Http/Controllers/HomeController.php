# @Author: tomfarrelly
# @Date:   2020-12-13T15:40:53+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-13T15:42:48+00:00
<?php



namespace App\Http\Controllers;



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
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $home = 'home';



        if($user->hasRole('admin')){
              $home = 'admin.home';
            }
              else if ($user->hasRole('dj')){
                $home = 'dj.home';
              }



              else if ($user->hasRole('eventmanager')){
                $home = 'eventmanager.home';
              }



        return redirect()->route($home);
    }
}
