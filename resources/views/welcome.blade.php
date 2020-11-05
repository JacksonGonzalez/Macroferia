<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Macroferia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        
        <style>
            body{
                padding-bottom: 0 !important;
            }
        </style>

    </head>
    <body class="">
        <div id="app">

        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
