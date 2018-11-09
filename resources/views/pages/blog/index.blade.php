@extends('layouts.blog')
@section('page-title')
    HS-Blog
@endsection
@section('main-content')
<div class=" w-full min-h-screen">
@include('components.blog.main-header')
@include('components.blog.secondary-header')
    <div class="w-4/5 mx-auto my-12">
        <section class="my-4">
        <h1 class="text-center font-bold text-2xl mb-12 ">Our Latest Posts</h1>
        <div class="px-4 flex justify-around items-center flex-wrap">
            @if($posts->count() > 0 )
            @foreach($posts as $post)
            <article style="width:400px;" class=" shadow border border-solid border-grey-light my-12 pb-8">
                <img class="block  bg-grey-light" src="{{asset("/images/Blog/Posts/Cover_Images/$post->image")}}">
                <div class="h-64">
                <p class=" my-12 mx-4 text-2xl font-bold " >{{$post->title}}</p>
            <p class=" my-12 mx-4 text-xl" >{{substr($post->body,0,40)}} ...</p>
            <button class="block text-xl my-12 mx-4 ">Continue Reading > </button>
                </div>
            </article>
            @endforeach

            @else

            <h1 class="text-center font-bold text-2xl my-8 text-grey-dark ">There Are no posts to show</h1>

            @endif



        </div>
        </section>
        
    </div>
@endsection