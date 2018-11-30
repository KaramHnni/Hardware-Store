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
        <script src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="">
            @yield('main-content')
        </div>

    <script src="{{asset('/assets/js/select2full.js')}}"></script>
    @yield('scripts')
    </body>
</html>