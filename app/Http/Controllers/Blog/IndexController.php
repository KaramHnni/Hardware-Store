<?php

namespace App\Http\Controllers\Blog;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){
        
        return view('pages.blog.index',[
            
            'categories' => Category::active()->get(),
        ]);
    }
}
