<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use App\Models\Blog\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(Request $request){

        $posts = Post::active()->orderBy('id','DESC')->get();
        if($request->tag){
        $tag = Tag::fetchBySlug($request->tag);
        $posts = $tag->posts()->orderBy('id','DESC')->get();
    }
        return view('pages.blog.index',[

            'categories' => Category::active()->get(),
            'posts' => $posts,
            
            
        ]);
    }
}
