<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="nav">
        <ul class="navUl">
            <a href="/flowers">Home</a>
            <a href="/flowers">Flowers</a>
            <a href="/new-flower">Add New Flower</a>
            <a href="/register">Register</a>
            @if (!session('email'))
            <a href="/login_form">Login</a>
            @else
            <a href="/logout">Logout</a>
            @endif
            <a href="/users">User List</a>
        </ul>
    </nav>
    <div class="_jsonNav navUl">
        <nav>
        <a href="/api/flowers">JSON-all</a>
        <a href="{{route('minprice', ['price' => 40])}}">JSON-minprice</a>
        </nav>
    </div>
    <hr>
    <div class="main">
        @yield('content')
    </div>

</body>




</html>
