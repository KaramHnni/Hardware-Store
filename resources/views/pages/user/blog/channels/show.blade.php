@extends('layouts.user')
@section('page-title')
My Channels
@endsection
@section('main-content')
<div class=" w-full min-h-screen">
@include('components.site.main-header')
    <div class="w-4/5 mx-auto my-12">
        <section class="my-4">
        <h1 class="text-center font-bold text-2xl mb-12 ">Here is your Channels</h1>
        <div class="px-4 flex justify-around items-center flex-wrap">
            @if($channels->count() > 0 )
            @foreach($channels as $channel)
            @component('components.blog.article-card')
            @slot('article_category')
                {{$post->category->name}}
            @endslot
            @slot('article_date')
                {{$post->CreatedAtFormat}}
            @endslot
            @slot('link_image')
            {{asset("/images/Blog/Posts/Cover_Images/$post->image")}}                    
            @endslot
            @slot('article_title')
            {{$post->title}}
            @endslot

            @slot('article_tags')

            @foreach($post->tags as $tag) 
            <a href="/blog?tag={{strtoupper($tag->slug)}}" class="inline-block rounded mx-2 px-4 py-1  text-white font-bold tag--bubble">{{$tag->name}}</a>
            @endforeach
            @endslot
            @slot('article_body_part')
            {{substr($post->body,0,40)}}
            @endslot
            
            @slot('article_slug')
            {{$post->slug}}
            @endslot
        @endcomponent
            @endforeach

            @else

            <h1 class="text-center font-bold text-2xl my-8 text-grey-dark ">There Are no posts to show</h1>

            @endif


        </div>
        </section>
        
    </div>
@endsection