<?php

namespace App\Http\Controllers\Blog\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show($slug){


        return view('pages.blog.posts.show',[
            'post' => Post::fetchBySlug($slug),
        ]);


    }
}
