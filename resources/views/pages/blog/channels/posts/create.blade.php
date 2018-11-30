@extends('layouts.blog');
@section('page-title')

Create A new Post

@endsection

@section('main-content')
    @include('components.blog.main-header')
    @include('components.blog.secondary-header')
    <div class="w-4/5 mx-auto my-12">
        <h1 class="text-center font-bold text-2xl mb-8 ">Create New Post</h1>

        <form method="POST" action = "{{route('blog.post.create',$channel->slug)}}" enctype="multipart/form-data">
            @csrf

            <input type="text" placeholder="Title"name="title" class="px-2 py-4 w-full  my-8 block border-b border-solid border-grey-light text-2xl text-grey-dark font-bold ">
            <textarea placeholder="Insert your post here" name="body" class="my-8 w-full border border-solid border-grey-light px-4 py-4 block text-1xl text-black font-semibold"></textarea>
            <select class="block border-solid border border-grey-light" name="category">
                @foreach($categories as $category)
                     <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <select class="tag w-4/5" multiple="multiple" name="tags">
                    @foreach($tags as $tag)

                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
            </select>
        <input type=hidden name="channel" value="{{$channel->id}}">
            <input type="file" name="cover_image" class="block my-4 ">
            <input type="submit" value="submit your post" class="bg-grey-dark text-white font-semibold inline-block px-4 py-4">
        </form>

        
    </div>

@endsection
@section('scripts')

      <script>$('.tag').select2();
      
        </script>
@endsection