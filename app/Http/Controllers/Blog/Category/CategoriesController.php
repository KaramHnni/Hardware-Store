<?php

namespace App\Http\Controllers\blog\Category;

use App\Models\Post;
use App\Models\Blog\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function show($slug){

        $category = Category::fetchBySlug($slug);
        return view('pages.blog.categories.show',[
            'posts' => $category->posts,
            'categories' => Category::active()->get(),
        ]);
    }
}
