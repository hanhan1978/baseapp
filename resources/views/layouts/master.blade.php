<!-- Stored in resources/views/layouts/master.blade.php -->
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('addCss')
        <link rel="stylesheet" type="text/css" href="{!! Html::cached_asset('css/material.css') !!}">
        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        @yield('content')
    <script src="{!! Html::cached_asset('js/material.js') !!}"></script>
    @yield('addJs')
    </body>
</html>
