@extends('layouts.site')
@section('page-title')
    {{env('APP_NAME')}}
@endsection
@section('main-content')
<div class="min-h-screen">
@include('components.site.main-header')
    
        <div class=" w-1/2 text-center  mx-auto my-32">
            <p class="text-orange-darker text-3xl my-12">the E-Market you have been looking for</p>
            <p class="text-orange text-lg my-8 font-semibold leading-loose">Discover The hardwares which are right next to you with only a click. Yes a click will do</p>
            <a href="#" class="hover:border-black hover:text-black inline-block mx-2 px-2 py-2 font-bold text-orange-light border-2 text-lg border-solid border-orange-light rounded">Discover More</a>
        </div>
    </div>
<div class="min-h-screen">
    
</div>

@endsection