<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
</head>
<body>
    @yield('content')
    <img src={{asset('images/logo.jpeg') }} width="100" height="100">
</body>
</html>