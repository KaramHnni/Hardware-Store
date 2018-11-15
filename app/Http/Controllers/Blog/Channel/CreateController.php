<?php

namespace App\Http\Controllers\Blog\Channel;

use App\Models\Owner;
use App\Models\Category;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function show(){
        return view('pages.blog.channels.create',[
            'categories' => Category::active()->get(),
        ]);
           }

    public function create(Request $request){
        $this->validate($request,[
            'channel_image' => 'image|nullable',
        ]);


        $channel = new Channel;
        $owner = new Owner; 
        $owner = $owner->store(auth()->user()->id);
       $channel =  $channel->store($request,$owner->id);
        return redirect(route('blog.show'));

        
    }
    }

