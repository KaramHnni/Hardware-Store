@extends('layouts.blog')

@section('page-title')

    {{$post->title}}

@endsection

@section('main-content')

@include('components.blog.main-header')
@include('components.blog.secondary-header')

<div class="w-4/5 mx-auto my-12">
    <div class="flex items-center justify-between">
        <h1 class="text-5xl font-bold mb-4">{{$post->title}}</h1>

        
        <div>
            <div class="relative">
            <a class="inlune-block px-2 bg-black text-white ">...</a>
                <ul class="absolute list-reset px-4 shadow">
                    <li class=" py-4"><a href="{{route('blog.post.edit',['slug' => $post->slug])}}">Edit Your post</a></li>
                    <li class="py-4"><a href="{{route('blog.post.delete',['slug' => $post->slug])}}">Delete Your post</a></li>
                </ul>
            </div>
        </div>
        
    </div>
        <p class="text-grey-dark" >Written on {{$post->channel->name}} By :
            @auth
                @if($post->publisher->user->id == auth()->user()->id)
                You
                @else
                {{$post->publisher->user->fullName}}</p>
                @endif
                <p class="my-8 text-lg">{{$post->body}}</p>
                @if( ! $post->users()->where('user_id',auth()->user()->id)->exists())
                    <a href="{{route('blog.post.like',$post->slug)}}" class="my-8 text-lg text-black">Like</a>
                @else
                    <a href="{{route('blog.post.dislike',$post->slug)}}" class="my-8 text-lg text-blue font-bold">Liked</a>

                @endif

            @endauth
            @guest
                {{$post->publisher->user->fullName}}</p>
                <p class="my-8 text-lg">{{$post->body}}</p>
                <a href="{{route('blog.post.like',$post->slug)}}" class="my-8 text-lg text-black">Like</a>
            @endguest
            
            
    </div>
@endsection