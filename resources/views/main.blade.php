<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    @include('partials._head')
  </head>
  
  <body>

    @include('partials._navigation')

    @yield('content')

  </body>
</html>