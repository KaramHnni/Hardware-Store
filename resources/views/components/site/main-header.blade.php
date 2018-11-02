<header class="bg-white px-8 py-4 flex justify-between items-center">
@include('components.logo')
<nav>
    <ul class="list-reset flex  items-center">
        <li><a href="#" class="main-header__item inline-block px-4 py-2 font-semibold text-orange-light ">BLOG</a></li>
        <li><a href="#" class="main-header__item inline-block px-4 py-2 font-semibold text-orange-light">SHOP</a></li>
        @guest
        <li><a href="#" class="main-header__item inline-block px-4 py-2 font-semibold text-orange-light">LOGIN</a></li>
        <li><a href="#" class="main-header__item inline-block px-4 py-2 font-semibold text-orange-light">REGISTER</a></li>
        @endguest
        @auth
        <li><a href="#" class="main-header__item inline-block px-4 py-2 font-semibold text-orange-light">PROFILE</a></li>
        <li><a href="#" class="main-header__item inline-block px-4 py-2 font-semibold text-orange-light">SIGN OUT</a></li>
        @endauth
    </ul>
</nav>
</header>