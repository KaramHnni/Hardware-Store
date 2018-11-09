<?php

namespace App\Http\Controllers\Blog\Posts;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){
        return view('pages.blog.posts.create',[
            'categories' => Category::active()->get(),
        ]);
    }
}
