<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">


    </head>
    <body>
        <header>
            <h1>Manarbek's laravel site</h1>
        </header>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>