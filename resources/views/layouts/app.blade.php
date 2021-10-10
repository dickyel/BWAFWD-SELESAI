<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        @include('includes.style')

        @stack('prepend-style')        
        
        @stack('addon-style')
    </head>
    <body>

        @include('includes.navbar')

        @yield('content')

        @include('includes.footer')

        @include('includes.script')

        @stack('prepend-script')

        @stack('addon-script')
        
    </body>
</html>