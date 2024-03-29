<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Weibo App') - Laravel 新手入门教程</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      <div class="offset-md-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>

  </body>
</html>
