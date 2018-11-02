<?php

namespace App\Http\Controllers\Site\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function show(){
        return view('pages.site.auth.register');
    }

    public function register(Request $request){
        
        $user = new User;
        $user->registerNewUser($request);
    }
}
