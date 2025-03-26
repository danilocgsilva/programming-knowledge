@extends("templates.base")

@section("content")

<h1>All uppercase</h1>

<p>It is like name update, but all with uppercase. I uses one of the event hook to make changes.</p>

@livewire("all-uppercase-input")

@endsection