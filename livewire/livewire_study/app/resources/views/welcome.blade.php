@extends("templates.base")

@section("content")

<h1>Welcome!</h1>

<ul>
@foreach ((new \App\RouteList)->list as $route)
<li><a href="{{ route($route->name) }}">{{ $route->name }}</a></li>
@endforeach
</ul>

@endsection