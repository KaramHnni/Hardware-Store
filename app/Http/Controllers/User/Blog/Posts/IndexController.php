<?php

namespace App\Http\Controllers\User\Blog\Posts;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){
        return view('pages.user.blog.posts.show',[
            'categories' => Category::active()->get(),
            'posts' => Post::myPosts()->get(),
            
        ]);
    }
}
