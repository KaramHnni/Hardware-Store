<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title')</title>

        <!-- Fonts -->
        <link href="{{ asset('/assets/css/font-raleway.css') }}" rel="stylesheet" type="text/css">
       

        <!-- Styles -->
        <link href="{{ asset('/assets/css/tailwind.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/assets/css/blog.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/select2.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div class="">
            @yield('main-content')
        </div>

    <script src="{{asset('/assets/js/select2full.js')}}"></script>
    @yield('scripts')
    </body>
</html>