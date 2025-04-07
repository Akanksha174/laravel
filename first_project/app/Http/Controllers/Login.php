<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function loginbtn(Request $request){
        // return $request->input('username');
        $request->session()->put('username', $request->input('username'));
        return redirect('/profile');
    
        // return "Login btn called";
    }
}
