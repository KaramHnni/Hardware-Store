<header class="bg-black px-8 py-4 flex justify-between items-center">
    @include('components.blog.logo')
    <nav>
        <ul class="list-reset flex  items-center">
            <li><a href="{{route('blog.show')}}" class="main-header__item inline-block mx-2 px-2 py-2 font-semibold text-white ">Blog</a></li>
            <li><a href="#" class="main-header__item inline-block mx_2 px-2 py-2 font-semibold text-white">Shop</a></li>
            <li><a href="#" class="main-header__item inline-block mx-2 px-2 py-2 font-semibold text-white">Marketplace</a></li>
    
            @guest
            <li><a href="{{route('site.register')}}" class="hover:border-black hover:text-black inline-block mx-2 px-2 py-2 font-semibold text-white border border-solid border-white rounded">Register for free</a></li>
            @endguest
            @auth
            <li><a href="#" class="main-header__item inline-block mx-2 px-2 py-2 font-semibold text-white">{{auth()->user()->username}}</a></li>
        <li><a href="{{route('site.signout')}}" class="main-header__item inline-block mx-2 px-2 py-2 font-semibold text-white">SIGN OUT</a></li>
            @endauth
        </ul>
    </nav>
    </header>