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
            <article class="w-2/5 h-64 border border-solid border-black"></article>
            <article class="w-2/5 h-64 border border-solid border-black"></article>


        </div>
        </section>
        
    </div>
@endsection