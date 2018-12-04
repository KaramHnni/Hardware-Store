<?php

namespace App\Http\Controllers\Blog\Post;

use App\Models\Blog\Post;
use App\Models\Blog\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function show($slug){
        $post  = Post::fetchBySlug($slug);

        if($post->publisher->user_id == auth()->user()->id){
        return view('pages.blog.posts.edit',[
            'categories' => Category::active()->get(),
            'post'  => $post,
        ]);
        }else{
            return redirect()->back();
        }
}


public function update(Request $request, $slug){

    $post = Post::fetchBySlug($slug);
    $post = $post->updateDetails($request);

    return redirect(route('blog.post.show',[
        'slug' => $post->slug,
    
    ]));
}
}
