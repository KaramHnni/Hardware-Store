<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="{{ asset('/assets/css/font-raleway.css') }}" rel="stylesheet" type="text/css">
       

        <!-- Styles -->
        <link href="{{ asset('/assets/css/tailwind.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/assets/css/site.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">

            @yield('main-content')
            <script src="{{asset('js/app.js')}}" ></script>



        </div>
    </body>
</html>