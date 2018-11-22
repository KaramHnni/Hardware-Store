<?php

namespace App\Http\Controllers\Blog\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete($slug){

        $post = Post::fetchBySlug($slug);
        $post = $post->delete();

        return redirect(route('blog.show'));

    }
}
