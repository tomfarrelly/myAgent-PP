<?php
# @Author: tomfarrelly
# @Date:   2020-12-02T14:52:42+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-02T14:53:03+00:00




namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
