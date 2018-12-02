<?php

namespace App\Http\Controllers\Site\Auth;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function show(){
        if(!Auth::check()){
        return view('pages.site.auth.register');
        }
        else{
            return redirect()->back();
        }
    }

    public function register(Request $request){
        
        $user = new User;
        if(User::active()->where('email',$request->email)){
            return redirect()->back()->with(['credentials' => true]);
        }
        else{
        $user->registerNewUser($request);
        
        Auth::attempt(['email' => $request->email , 'password' => $request->password]);
        return redirect()->intended('user/dashboard');
    }
}
}
