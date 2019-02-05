import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Logo from './Logo';

 export default class Header extends Component{

        render(){

            return(

<header class="bg-white px-8 py-4 flex justify-between items-center border-b border-solid border-grey-lighter">
<Logo />
<nav>
    <ul class="list-reset flex  items-center">
        <li><a href="" class="main-header__item inline-block mx-2 px-2 py-2 font-semibold text-orange-light ">Blog</a></li>
        <li><a href="#" class="main-header__item inline-block mx_2 px-2 py-2 font-semibold text-orange-light">Shop</a></li>
        <li><a href="#" class="main-header__item inline-block mx-2 px-2 py-2 font-semibold text-orange-light">Marketplace</a></li>
        <li><a href="" class="hover:border-black hover:text-black inline-block mx-2 px-2 py-2 font-semibold text-orange-light border border-solid border-orange-light rounded">Register for free</a></li>
        
        
    </ul>
</nav>
</header>
            );
        }

}
