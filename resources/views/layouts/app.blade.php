<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="../css/app.css">
    </head>
    <body>
        @section('sidebar')
            
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>