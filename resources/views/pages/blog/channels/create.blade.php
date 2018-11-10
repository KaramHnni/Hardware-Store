@extends('layouts.blog');
@section('page-title')

Create A new Channel

@endsection

@section('main-content')
    @include('components.blog.main-header')
    @include('components.blog.secondary-header')
    <div class="w-4/5 mx-auto my-12">

        <h1 class="text-center font-bold text-2xl mb-8 ">Create New Channel</h1>

        <form method="POST" action = "{{route('blog.channel.create')}}" enctype="multipart/form-data">
            @csrf

            <input type="text" placeholder="Channel's name" name="name" class="px-2 py-4 w-full  my-8 block border-b border-solid border-grey-light text-2xl text-grey-dark font-bold ">
            <input type="file" name="channel_image" class="block my-4 ">
            <input type="submit" value="Create Your Channel" class="bg-grey-dark text-white font-semibold inline-block px-4 py-4">
        </form>

    </div>

@endsection