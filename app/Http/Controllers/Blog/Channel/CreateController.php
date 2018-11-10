<?php

namespace App\Http\Controllers\Blog\Channel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){
        return view('pages.blog.channels.create');
           }
}
