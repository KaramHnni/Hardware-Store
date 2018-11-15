<?php

namespace App\Http\Controllers\Blog\Channel;

use App\Models\Category;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function show($slug){

        return view('pages.blog.channels.edit',[
            'categories' => Category::active()->get(),
            'channel'  => Channel::fetchBySlug($slug),
        ]);

    }


    public function update(Request $request, $slug){

        $channel = Channel::fetchBySlug($slug);
        $channel = $channel->updateDetails($request);

        return redirect(route('blog.channel.show',[
            'slug' => $channel->slug,
        
        ]));
    }
}
