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
        <h1 class="text-center font-bold text-2xl mb-8 ">Our Latest Posts</h1>
        <div class="px-4 flex justify-around items-center wrap">
            @if($posts->count() > 0 )
            @foreach($posts as $post)
            
            <article class=" w-2/5 border border-solid border-black">
            <img class="block" src="{{asset("/images/Blog/Posts/Cover_Images/$post->image")}}">
            <h3>Written By : {{$post->user->FullName}}</h3>
            </article>
            @endforeach

            @else

            <h1 class="text-center font-bold text-2xl my-8 text-grey-dark ">There Are no posts to show</h1>

            @endif



        </div>
        </section>
        
    </div>
@endsection