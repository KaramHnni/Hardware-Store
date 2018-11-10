<?php

namespace App\Http\Controllers\Blog\Post;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){
        return view('pages.blog.posts.create',[
            'categories' => Category::active()->get(),
        ]);
           }

    public function create(Request $request){

            $this->validate($request,[
                'cover_image' => 'image|nullable',
            ]);


            $post = new Post;
           $post =  $post->store($request);
           // return redirect(route('blog.show'));

            
        }
    }

