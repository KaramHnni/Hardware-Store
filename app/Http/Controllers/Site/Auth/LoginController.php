<?php

namespace App\Http\Controllers\Site\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function show(){
        if(! auth()){
        return view('pages.site.auth.login');
        }
        else{
            return redirect()->back();
        }
    }

    public function auth(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('user/dashboard');
        }
        else{
           return redirect()->back()->with(['credentials' => true]);
        }
    }
}
