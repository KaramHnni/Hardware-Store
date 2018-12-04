<?php

namespace App\Http\Controllers\Blog\Post;

use App\Models\Blog\Post;
use App\Models\Blog\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show($slug){


        return view('pages.blog.posts.show',[
            'post' => Post::fetchBySlug($slug),
            'categories' => Category::active()->get(),
        ]);


    }

    
}
