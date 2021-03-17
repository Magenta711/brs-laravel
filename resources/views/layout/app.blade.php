<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        {{-- Styles --}}
        <link rel="stylesheet" href="css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        @yield('css')
        <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
    </head>
    <body>
            <div class="content">
                {{-- <div id="buyers_component"></div> --}}
                <div class="container mt-4 pt-4">
                    <div class="row justify-content-center">
                        @yield('content')
                    </div>
                </div>
            </div>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
    @include('includes.alerts')
</html>

@yield('js')