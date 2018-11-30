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
                @component('components.blog.article-card')
                    @slot('article_category')
                        {{$post->category->name}}
                    @endslot
                    @slot('article_date')
                        {{$post->created_at}}
                    @endslot
                    @slot('link_image')
                    {{asset("/images/Blog/Posts/Cover_Images/$post->image")}}                    
                    @endslot
                    @slot('article_title')
                    {{$post->title}}
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