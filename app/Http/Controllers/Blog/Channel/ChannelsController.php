<?php

namespace App\Http\Controllers\Blog\Channel;

use App\Models\Blog\Category;
use App\Models\Blog\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChannelsController extends Controller
{
    public function show(){

        return view('pages.blog.channels.index',[
            'channels' => Channel::active()->get(),
            'categories' => Category::active()->get(),
        ]);
    }
}
