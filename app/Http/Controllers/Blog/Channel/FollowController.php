<?php

namespace App\Http\Controllers\Blog\Channel;

use App\Models\Blog\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowController extends Controller
{
    public function follow($slug){

        $channel = Channel::fetchBySlug($slug);

        $channel->users()->attach(auth()->user()->id);

        return redirect()->back()->with('followed',true);
    }

    public function unfollow($slug){

        $channel = Channel::fetchBySlug($slug);

        $channel->users()->detach(auth()->user()->id);

        return redirect()->back()->with('unfollowed',true);
    }
}
