<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store Konecta</title>

    {{--Seccion de css--}}
    @include('layouts.css')
  </head>
  <body>
    @include('layouts.navbar')

    <div class="custom-container">

        @yield('content')

    </div>

    @include('layouts.footer')
    {{--Seccion de js  --}}
    @include('layouts.js')
  </body>
</html>
