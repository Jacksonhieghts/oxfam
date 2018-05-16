<?php

namespace App\Http\Controllers;

use auth;
use App\user;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function login(Request $request){


            if(Auth::attempt([

                'email' => $request->email,
                'password' => $request->password
            ]))

{

     $user = User::Where('email',$request->email)->first();
       
        if($user->is_admin())
        {

            return redirect()->route('new');
        }

            return redirect()->route('awareness');
}

            return redirect()->back();



  }
}
