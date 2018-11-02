@extends('layouts.site')
@section('page-title')
    Register
@endsection
@section('main-content')
<div class="bg-green-lightest w-full pb-12">
@include('components.site.main-header')
<form method="POST" action="" class=" py-4 px-8 w-1/2 bg-white rounded shadow mx-auto mt-32">
    <div class="my-8">
        <label for="name" class="block font-semi-bold text-orange-dark mb-4">Name</label>
        <input id="name" name="name" type="text" class="w-2/3 border border-solid border-grey-dark rounded py-2 px-4">
    </div>
    <div class="my-8">
        <label for="last_name" class="block font-semi-bold text-orange-dark mb-4">Last Name</label>
        <input id="last_name" name="last_name"type="text" class="w-2/3 border border-solid border-grey-dark rounded py-2 px-4">
    </div>
    <div class="my-8">
            <label for="username" class="block font-semi-bold text-orange-dark mb-4">Username</label>
            <input id="username" name="username" type="text" class="w-2/3 border border-solid border-grey-dark rounded py-2 px-4">
        </div>
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