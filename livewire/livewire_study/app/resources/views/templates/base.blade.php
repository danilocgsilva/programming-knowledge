<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire study</title>
    <style>
        li {
            display: inline-block;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <ul>
    @foreach ($routeList->list as $route)
        <li><a href='{{ route($route->name) }}'>{{ $route->name }}</a></li>
    @endforeach
    </ul>
    
    @yield("content")
</body>
</html>