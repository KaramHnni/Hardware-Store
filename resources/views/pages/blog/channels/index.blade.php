@extends('layouts.blog');
@section('page-title')

Create A new Channel

@endsection

@section('main-content')
    @include('components.blog.main-header')
    @include('components.blog.secondary-header')
    <div class="w-4/5 mx-auto my-12">

        <div class="flex">
        <h1>Channels</h1>
        <a href = "{{route('blog.channel.create')}}" class="inline-block mx-4 px-4 py-2 font-semibold rounded border border-soliid border-blue-dark text-blue-dark bg-white ">Create A channel</a>
        </div>
        <div class="px-4 flex justify-around items-center flex-wrap">
            @if($channels->count() > 0 )
            @foreach($channels as $channel)
            <article style="width:200px" class="flex  shadow border border-solid border-grey-light my-12">
                <img style="block full-h" class="w-32 bg-grey-light" src="{{asset("/images/Blog/Channels/Channel_Images/$channel->image")}}">            
                <div class="flex-grow">
                <a href="/blog/Channels/{{$channel->slug}}" class="block px-4 font-bold pt-4">{{$channel->name}}</a>
                <p class=" px-4 py-2 text-sm text-grey-dark">followers: {{$channel->users()->count()}}</p>
            </div>
            </article>
            @endforeach

            @else

            <h1 class="text-center font-bold text-2xl my-8 text-grey-dark ">There Are no Channels to show</h1>


            @endif


        </div>
    </div>

    @endsection