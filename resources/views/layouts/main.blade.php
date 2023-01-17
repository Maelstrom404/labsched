<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/resources/views/layouts/output.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<header><h1 class="text-red-700">LABSCHED</h1></header>
<body>
    @yield('content')
</body>
<footer><h1>2023</h1></footer>
</html>