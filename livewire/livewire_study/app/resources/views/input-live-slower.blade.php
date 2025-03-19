@extends("templates.base")

@section("content")

<h1>Input live slower</h1>

<p>The input will reflect the value in the name. I set the server to be a little bit lazy. It will update with delay.</p>

@livewire("input-live-slower")

@endsection