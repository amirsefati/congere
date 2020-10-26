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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userlevel = Auth::user()->userlevel;
       if($userlevel == 0)
        {
        return redirect('student/index');
        }
        elseif($userlevel == 1)
        {
            return view('teachers.index');
        }
        elseif($userlevel == 2)
        {
            return view('admin.index');
        }
        elseif($userlevel == 3)
        {
            return response()->json('you Are SuperAdmin');
        }
    }
}
