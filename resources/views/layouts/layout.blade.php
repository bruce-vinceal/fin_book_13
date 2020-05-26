<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="/css/index.css" rel="stylesheet">
        <link href="/css/navbar.css" rel="stylesheet">
        <link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="/css/all.css" rel="stylesheet">
        <link href="/css/login.css" rel="stylesheet">
        <link href="/css/signup.css" rel="stylesheet">
        <link href="/css/dashboard.css" rel="stylesheet">
    </head>
    <body>
            @yield('content')
            <script src="/js/all.js"></script>
        <script src="/js/jquery-3.5.1.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap/bootstrap.js"></script>
        <script src="/js/dashboard.js"></script>
    </body>
</html>