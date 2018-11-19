@extends('layouts.blog')

@section('page-title')

    {{$post->title}}

@endsection

@section('main-content')

@include('components.blog.main-header')
@include('components.blog.secondary-header')

<div class="w-4/5 mx-auto my-12">
        <h1 class="text-5xl font-bold mb-4">{{$post->title}}</h1>
        <p class="text-grey-dark" >Written on {{$post->channel->name}} By : {{$post->publisher->user->fullName}}</p>
        <p class="my-8 text-lg">{{$post->body}}</p>
</div>
@endsection