<?php

namespace App\Http\Controllers\Blog\Channel;

use App\Models\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete($slug){

        $channel = Channel::fetchBySlug($slug);
        $channel = $channel->delete();

        return redirect()->back();

    }
}
