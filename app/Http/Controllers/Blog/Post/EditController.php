<?php

namespace App\Http\Controllers\Blog\Post;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function show($slug){

        return view('pages.blog.posts.edit',[
            'categories' => Category::active()->get(),
            'post'  => Channel::fetchBySlug($slug),
        ]);
}
}
