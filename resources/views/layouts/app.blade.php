<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <span>
            <a href="{{ route('home') }}">Home</a>
        </span>
        <span>
            <a href="{{ route('comics.index') }}">All Comics</a>
        </span>
    </header>

    @yield('main_content')
</body>
</html>