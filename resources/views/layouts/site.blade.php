<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title')</title>

        <!-- Fonts -->
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link href="{{ asset('/assets/css/font-raleway.css') }}" rel="stylesheet" type="text/css">
       

        <!-- Styles -->
        <link href="{{ asset('/assets/css/tailwind.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/assets/css/site.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div>
            @yield('main-content')
        </div>
    </body>
</html>