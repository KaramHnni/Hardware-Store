<div class="h-1 w-full bg-yellow"></div>
<header class="px-8 py-4 flex justify-between items-center">
    
    @include('components.blog.logo')
    
        <ul class="list-reset flex  items-center">
            <li><a href="{{route('blog.show')}}" class="main-header__item inline-block mx-2 px-2 py-2 text-white ">Blog</a></li>
            <li><a href="#" class="main-header__item inline-block mx_2 px-2 py-2  text-white">Shop</a></li>
            <li><a href="#" class="main-header__item inline-block mx-2 px-2 py-2  text-white">Marketplace</a></li>
    
            @guest
            <li><a href="{{route('login')}}" class="main-header__item inline-block mx-2 px-2 py-2 text-white">Login</a></li>
            <li><a href="{{route('site.register')}}" class="main-header__item inline-block mx-2 px-2 py-2 text-white ">Register for free</a></li>

            @endguest
            @auth
            <li class="relative profile--dropdown--trigger"><a href="#" class="main-header__item inline-block mx-2 px-2 py-2  text-white">{{auth()->user()->username}}</a>
                <ul class="profile--dropdown--menu py-4 absolute w-full bg-white text-black shadow list-reset text-center">
                <li class="text-center"><a href="{{route('blog.post.create')}}" class="main-header__item inline-block mx-2 my-4 px-2 py-2  text-black">Create New Post</a></li>
                    <li class="text-center"><a href="{{route('blog.channel.create')}}" class="main-header__item inline-block mx-2 my-4 px-2 py-2  text-black">Create New Channel</a></li>
                    <li class="text-center"><a href="{{route('user.blog.posts')}}" class="main-header__item inline-block mx-2 my-4 px-2 py-2  text-black">My Posts</a></li>

                    <li class="text-center"><a href="{{route('site.signout')}}" class="main-header__item m-4 inline-block mx-2 px-2 py-2  text-black">Sign Out</a></li>
                </ul>
            </li>
        
            @endauth
        </ul>
   
    </header>