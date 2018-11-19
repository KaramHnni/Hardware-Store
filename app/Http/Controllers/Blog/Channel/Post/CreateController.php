<?php

namespace App\Http\Controllers\Blog\Channel\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Publisher;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show($slug){
        return view('pages.blog.channels.posts.create',[
            'categories' => Category::active()->get(),
            'channel' => Channel::fetchBySlug($slug),
        ]);
           }

    public function create(Request $request){

            $this->validate($request,[
                'cover_image' => 'image|nullable',
            ]);


            $post = new Post;
            $publisher = new Publisher;
            $publisher = $publisher->store(auth()->user()->id);
            $post =  $post->store($request,$publisher->id);
            return redirect(route('blog.show'));

            
        }
    }

