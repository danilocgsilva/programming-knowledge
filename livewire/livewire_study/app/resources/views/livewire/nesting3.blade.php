<div>
    <p>Nesting 3</p>
    @foreach ($names as $name)
        @livewire('nesting3-child', ["name" => $name])
    @endforeach
</div>
