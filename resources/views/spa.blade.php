<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="locale" content="{{ \App::getLocale() }}"/>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/logo/logo-tanmnt.png')}}" />

    @yield('css')
</head>
<body>
<div id="app">
   <app />
</div>

<script src={{asset('static/tinymce4.7.5/tinymce.min.js')}}></script>
<script src="{{mix('js/app.js')}}"></script>
@yield('js')
</body>
</html>
