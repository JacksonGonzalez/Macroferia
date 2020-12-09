<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Macroferia</title>

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">    
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <!--  CSS  -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
        {{--  <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">  --}}
        <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {{--  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  --}}
        {{--  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">  --}}
        {{--  <link rel="stylesheet" href="{{ asset('css/brands.min.css') }}">  --}}
        {{--  <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/regular.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/solid.min.css') }}">  --}}
        
        
        <style>
            body{
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }
        </style>

    </head>
    <body class="hold-transition sidebar-mini">
        <div id="app">

        </div>
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
        <script src="{{ asset('/js/Chart.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('/js/demo.js') }}"></script>
        <script src="{{ asset('/js/dashboard3.js') }}"></script>
    </body>
</html>
