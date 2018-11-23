@extends('layouts.blog')

@section('page-title')

    {{$channel->name}}

@endsection

@section('main-content')

@include('components.blog.main-header')
@include('components.blog.secondary-header')

<div class="w-4/5 mx-auto my-12">
    <div class="flex justify-between  items-center ">
    <div >
            <div class="flex items-center">
                    <h1 class="text-5xl font-bold">{{$channel->name}}</h1>
                    <a href = "{{route('blog.post.create',$channel->slug)}}" class="inline-block mx-4 py-4 px-4  font-semibold rounded border border-soliid border-blue-dark text-blue-dark bg-white ">Create A post</a>
                    </div>
        <p class="text-grey-dark" >Owned By : {{$channel->owner->user->fullName}}</p>
        @auth
        @if( ! $channel->users()->where('user_id',auth()->user()->id)->exists())
    <a href="{{route('blog.channel.follow',$channel->slug)}}">Follow This Channel</a>
        @else
        <a href="{{route('blog.channel.unfollow',$channel->slug)}}">Unfollow This Channel</a>

        @endif
        @endauth
    </div>
    
    @auth
    @if($channel->owner->user->id == auth()->user()->id)
    <div>
        <div class="relative">
        <a class="inlune-block px-2 bg-black text-white ">...</a>
            <ul class="absolute list-reset px-4 shadow">
            <li class=" py-4"><a href="{{route('blog.channel.edit',['slug' => $channel->slug])}}">Edit Your Channel</a></li>
                <li class="py-4"><a href="{{route('blog.channel.delete',['slug' => $channel->slug])}}">Delete Your Channel</a></li>
            </ul>
        </div>
    </div>
    @endif
    @endauth
    </div>
    <div>
        @if($channel->posts->count() > 0 )
            @foreach($channel->posts as $post)
            <article style="width:400px;" class=" shadow border border-solid border-grey-light my-12 pb-8">
                <img class="block  bg-grey-light" src="{{asset("/images/Blog/Posts/Cover_Images/$post->image")}}">
                <div class="h-64">
                <p class=" my-12 mx-4 text-2xl font-bold " >{{$post->title}}</p>
            <p class=" my-12 mx-4 text-xl" >{{substr($post->body,0,40)}} ...</p>
                <a href="/blog/Posts/{{$post->slug}}"class="block text-xl my-12 mx-4 ">Continue Reading > </a>
                </div>
            </article>
            @endforeach

            @else

            <h1 class="text-center font-bold text-2xl my-8 text-grey-dark ">There Are no posts In this channel</h1>

            @endif
</div>
@endsection