<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>

  <meta name="title" content="@yield('title')">
  <meta name="description" content="@yield('description')">

  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('og_title')">
  <meta property="og:description" content="@yield('og_description')">
  <meta property="og:image" content="@yield('og_image')">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ url()->current() }}">
  <meta property="twitter:title" content="@yield('og_title')">
  <meta property="twitter:description" content="@yield('og_description')">
  <meta property="twitter:image" content="@yield('og_image')">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('css')


</head>
<body>

  @if (env('APP_ENV') == "production")
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  @else
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
  @endif

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')


  <style>

  </style>


  @yield('javascript')

</body>
</html>
