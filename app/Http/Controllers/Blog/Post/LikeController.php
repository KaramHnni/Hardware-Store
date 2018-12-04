<?php

namespace App\Http\Controllers\Blog\Post;

use App\Models\Blog\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    public function like($slug){

        $post = Post::fetchBySlug($slug);

        $post->users()->attach(auth()->user()->id);

        return redirect()->back()->with('liked',true);
    }

    public function dislike($slug){

        $post = Post::fetchBySlug($slug);

        $post->users()->detach(auth()->user()->id);

        return redirect()->back()->with('unfollowed',true);
    }
}
