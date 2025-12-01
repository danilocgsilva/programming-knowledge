@extends("templates.base")

@section("content")

<p>Say hi!</p>

@livewire("nesting2.say-hi", ['name' => $name])

@endsection