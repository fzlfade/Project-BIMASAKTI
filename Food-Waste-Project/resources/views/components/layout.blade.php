<!DOCTYPE html>
<html>
    <head>
    @vite(['resources/css/style.css','resources/css/app.scss', 'resources/js/app.js'])  
    <title>Food Waste</title>
    </head>
    <body class="vh-100 overflow-hidden landing">
        @yield('content')
    </body>
</html>