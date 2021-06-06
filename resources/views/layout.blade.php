<!DOCTYPE html>
<html>
    <head>
        <!-- $post->title -->
        @yield('title')

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="/app.css">
    </head>

    <body>
        @include('header')
        <div id="main-container" class="main-container">
            @yield('content')
        </div>
    </body>
</html>