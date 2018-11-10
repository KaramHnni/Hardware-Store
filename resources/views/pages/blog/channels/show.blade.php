@extends('layouts.blog')

@section('page-title')

    {{$channel->name}}

@endsection

@section('main-content')

@include('components.blog.main-header')
@include('components.blog.secondary-header')

<div class="w-4/5 mx-auto my-12">
        <h1 class="text-5xl font-bold mb-4">{{$channel->name}}</h1>
        
        <p class="my-8 text-lg">{{$channel->posts->title}}</p>
</div>
@endsection