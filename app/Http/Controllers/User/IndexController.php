<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function redirectToDashboard(){

        return redirect(route('user.dashboard'));
    }
}
