<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignOutController extends Controller{
    public function auth(){

        auth()->logout();
        request()->session()->flush();
        
        return redirect()->route('login');
    }
}
