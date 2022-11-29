<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="main">
        <nav class="nav">
            <ul class="navUl">
                <li><a href="/flowers">Home</a></li>
                <li><a href="/flowers">Flowers</a></li>
                <li><a href="/new-flower">Add New Flower</a></li>
                <li><a href="/api/flowers">JSON</a></li>
            </ul>
        </nav>
        @yield('content')
    </div>
</body>




</html>
