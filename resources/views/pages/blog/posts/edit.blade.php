@extends('layouts.blog')

@section('page-title')

    {{$post->name}}

@endsection

@section('main-content')

@include('components.blog.main-header')
@include('components.blog.secondary-header')

<div class="w-4/5 mx-auto my-12">
    <h1 class="text-center font-bold text-2xl mb-8 ">Edit Your post</h1>
    <form method="POST" action = "{{route('blog.post.edit',['slug' =>$post->slug ])}}" enctype="multipart/form-data">
        @csrf

    <input type="text" value="{{$post->title}}" placeholder="Channel's name" name="title" class="px-2 py-4 w-full  my-8 block border-b border-solid border-grey-light text-2xl text-grey-dark font-bold ">
    <textarea value="" name="body" class="my-8 w-full border border-solid border-grey-light px-4 py-4 block text-1xl text-black font-semibold">{{$post->body}}</textarea>
    <input type="file" name="cover_image" class="block my-4 ">

    <input type="submit" value="Edit Your Channel" class="bg-grey-dark text-white font-semibold inline-block px-4 py-4">
    </form>
        

</div>
@endsection