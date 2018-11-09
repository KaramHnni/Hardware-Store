<div class="h-1 w-full bg-yellow"></div>
<header class="px-8 py-4 flex justify-between items-center">
    
    @include('components.blog.logo')
    
        <ul class="list-reset flex  items-center">
            <li><a href="{{route('blog.show')}}" class="main-header__item inline-block mx-2 px-2 py-2 text-white ">Blog</a></li>
            <li><a href="#" class="main-header__item inline-block mx_2 px-2 py-2  text-white">Shop</a></li>
            <li><a href="#" class="main-header__item inline-block mx-2 px-2 py-2  text-white">Marketplace</a></li>
    
            @guest
            <li><a href="{{route('site.register')}}" class="hover:border-yellow hover:bg-yellow inline-block mx-2 px-2 py-2 text-white border border-solid border-white rounded">Register for free</a></li>
            @endguest
            @auth
            <li><a href="#" class="main-header__item inline-block mx-2 px-2 py-2  text-white">{{auth()->user()->username}}</a></li>
        <li><a href="{{route('site.signout')}}" class="main-header__item inline-block mx-2 px-2 py-2 text-white">SIGN OUT</a></li>
            @endauth
        </ul>
   
    </header>