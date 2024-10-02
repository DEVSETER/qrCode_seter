<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('layouts.title-meta')
        @include('layouts.head')
  </head>

    <body class="authentication-bg" style="background-color: white">
        @yield('content')

        <!-- Sweet Alert -->
        @include('sweetalert::alert')

        @include('layouts.vendor-scripts')


    </body>
</html>
