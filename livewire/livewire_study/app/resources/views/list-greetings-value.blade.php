@extends("templates.base")

@section("content")

<h1>List of greetings too</h1>

<p>This one I use the value attribute. So now, I can set an greeting to something empty.</p>

@livewire("list-greetings-value")

@endsection