<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Result;
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
    public function index()
    {
      $name = Auth::user()->name;
        $data = Result::select('Subject','Internals1','Internals2','Internals3','Finals')->where('User_Name',$name) ->get();
        return view('home') ->with('students',$data);
    }
    
}
