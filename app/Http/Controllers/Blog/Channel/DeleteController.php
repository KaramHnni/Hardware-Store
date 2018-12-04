<?php

namespace App\Http\Controllers\Blog\Channel;

use App\Models\Blog\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete($slug){
        if($channel->owner->user->id == auth()->user()->id){

        $channel = Channel::fetchBySlug($slug);
        $channel = $channel->delete();

        return redirect(route('blog.channels'));
        }else{
            return redirect()->back();
        }

    }
}
