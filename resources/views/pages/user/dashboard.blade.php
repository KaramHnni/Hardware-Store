@extends('layouts.site')
@section('page-title')
    {{env('APP_NAME')}}
@endsection
@section('main-content')
<div class="bg-green-lightest w-full min-h-screen">
@include('components.main-header')
</div>
@endsection