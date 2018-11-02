@extends('layouts.site')
@section('page-title')
    {{env('APP_NAME')}}
@endsection
@section('main-content')
<div class="bg-green-lightest w-full min-h-screen">
@include('components.site.main-header')
    
        <div class=" w-1/2 text-center  mx-auto my-32">
            <p class="text-orange-darker text-3xl my-12">the E-Market you have been looking for</p>
            <p class="text-orange text-lg my-8 font-semibold leading-loose">Discover The hardwares which are right next to you with only a click. Yes a click will do</p>
            <a href="#" class="hover:border-black hover:text-black inline-block mx-2 px-2 py-2 font-bold text-orange-light border-2 text-lg border-solid border-orange-light rounded">Discover More</a>
        </div>
    </div>
<div class="min-h-screen flex items-center justify-around ">

    <div class="w-1/5">
        <p class="text-center text-orange-darker font-semibold leading-loose">Discover the hardware occasions right near you</p>
    </div>
    <div class="w-1/5">
        <p class="text-center text-orange-darker font-semibold leading-loose">Higher Levels Of Security</p>
    </div>
    <div class="w-1/5">
        <p class="text-center text-orange-darker font-semibold leading-loose">Contact The Buyers Directly</p>
    </div>
    <div class="w-1/5">
        <p class="text-center text-orange-darker font-semibold leading-loose">Learn more everyday about the market</p>
    </div>


</div>
<div class="min-h-screen py-20 bg-grey-lighter" >
    <div>
        <p class="text-center text-4xl my-20 font-bold">Join Us Now</p>
        <div class="flex justify-between py-20 w-1/2 mx-auto items-center">

                <a href="{{route('site.register')}}" class="hover:border-black hover:text-black inline-block mx-2 px-2 py-2 font-bold text-orange-light border-2 text-lg border-solid border-orange-light rounded">Register For Free</a>
            <span>You Have an account ? Then</span>
            <a href="#" class="hover:border-black hover:bg-black inline-block mx-2 px-2 py-2 font-bold text-white border-2 text-lg border-orange-light border-solid bg-orange-light rounded">Login To your Account</a>


        </div>
    </div>
</div>

@endsection