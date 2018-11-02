<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function show(){
        return view('pages.site.auth.login');
    }

    public function aut(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('User/Dashboard');
        }
        else{
            redirect(route('login'))->with('credentials',true);
        }
    }
}
