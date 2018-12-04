<?php

namespace App\Http\Controllers\Blog\Channel;

use App\Models\Blog\Channel;
use App\Models\Blog\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show($slug){


        return view('pages.blog.channels.show',[
            'channel' => Channel::fetchBySlug($slug),
            'categories' => Category::active()->get(),
        ]);


    }
}
