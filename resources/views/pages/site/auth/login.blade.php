@extends('layouts.site')
@section('page-title')
    Login
@endsection
@section('main-content')
<div class="bg-green-lightest w-full pb-12">
@include('components.main-header')
<form method="POST" action="{{route('login')}}" class=" py-4 px-8 w-1/2 bg-white rounded shadow mx-auto mt-32">
    @csrf
    <div class="my-8">
        <label for="email" class="block font-semi-bold text-orange-dark mb-4">E-Mail</label>
        <input id="email" name="email" type="email" class="w-2/3 border border-solid border-grey-dark rounded py-2 px-4">
    </div>
    <div class="my-8">
            <label for="password" class="block font-semi-bold text-orange-dark mb-4">Password</label>
            <input id="password" name="password" type="password" class="w-2/3 border border-solid border-grey-dark rounded py-2 px-4">
    </div>
    <input type="submit" class="block mx-auto px-4 py-4 text-center rounded bg-orange-light text-white" value="Register">
     
</form>
</div>
@endsection