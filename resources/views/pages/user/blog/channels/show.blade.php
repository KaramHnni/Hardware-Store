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
            <article style="width:200px;height:70px;" class="flex  shadow border border-solid border-grey-light my-12 pb-8">
                <img style="height:70px;" class="w-16 bg-grey-light" src="{{asset("/images/Blog/Channels/Channel_Images/$channel->image")}}">            
                <div class="flex-grow">
                <a href="/blog/Channels/{{$channel->slug}}" class="block px-4 font-bold pt-4">{{$channel->name}}</a>
                <p class=" px-2 pt-2 text-sm text-grey-dark">followers: xxx</p>
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