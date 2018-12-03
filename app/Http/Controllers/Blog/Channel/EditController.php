<?php

namespace App\Http\Controllers\Blog\Channel;

use App\Models\Blog\Category;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function show($slug){

        $channel = Channel::fetchBySlug($slug);
        if($channel->owner->user->id == auth()->user()->id){
        return view('pages.blog.channels.edit',[
            'categories' => Category::active()->get(),
            'channel' => $channel,
            
        ]);
        }
        else{
            return redirect()->back();
        }
        
    }


    public function update(Request $request, $slug){

        $channel = Channel::fetchBySlug($slug);
        $channel = $channel->updateDetails($request);

        return redirect(route('blog.channel.show',[
            'slug' => $channel->slug,
        
        ]));
    }
}
