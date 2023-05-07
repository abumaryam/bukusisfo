<html>
    <head>
        <title>App Name - @yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        @section('sidebar')
            Home <br>
            About <br>
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

