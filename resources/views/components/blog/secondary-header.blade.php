<nav class="pt-24 px-8 flex  items-center" >

    <ul class="list-reset flex  items-center">
            <li><a href="{{route('blog.main')}}" class="main-header__item inline-block mx-2 px-2 py-2 text-black ">Main</a></li>
           @foreach($categories as $category)

           <li><a href="{{route('blog.categories',$category->slug)}}" class="main-header__item inline-block mx-2 px-2 py-2 text-black ">{{$category->name}}</a></li>
           
           @endforeach

    <li><a href="{{route('blog.channels')}}" class="main-header__item inline-block mx-2 px-2 py-2 text-black ">Channels</a></li>



    </ul>
</nav>