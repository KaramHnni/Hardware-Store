<?php

namespace App\Http\Controllers\User\Blog\Channels;

use App\Models\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
public function show(){
    return view('pages.user.blog.channels.show',[
        'channels' => Channel::myChannels()->get(),
        
    ]);
}
}
