<nav class="px-8 py-4 flex  items-center border-solid border-b border-grey-lightest" >

    <ul class="list-reset flex  items-center">
            <li><a href="{{route('blog.show')}}" class="main-header__item inline-block mx-2 px-2 py-2 text-black ">Main</a></li>
           @foreach($categories as $category)

           <li><a href="#" class="main-header__item inline-block mx-2 px-2 py-2 text-black ">{{$category->name}}</a></li>
           
           @endforeach


    </ul>
</nav>