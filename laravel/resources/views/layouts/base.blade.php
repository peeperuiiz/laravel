<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    @include('layouts._partials.menu')
    @yield('content')
</body>
</html>