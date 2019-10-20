<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{

    public function PostData(Request $request)
    {

      $email = $request -> input('email')
      $data = results::select('Subject','Internals-1','Internals-2','Internals-3','Finals')->where('User_Name',$name) ->get();

      }
}
