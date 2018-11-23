<?php

namespace App\Http\Controllers\Blog\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    
    public function redirectToMain(){

        return redirect(route('blog.show'));
    }
}
