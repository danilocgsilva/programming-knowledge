<div>
    <select name="" id="" wire:model.live.debounce.500ms='greetings' multiple>
        <option>Alô</option>
        <option>Hello</option>
        <option>GoodBye</option>
        <option>Adios</option>
    </select>

    <p>{{ implode(", ", $greetings) }}, John Doe</p>
</div>
