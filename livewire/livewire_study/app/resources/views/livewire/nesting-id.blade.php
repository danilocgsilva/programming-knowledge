<div>
    <h2>Nesting component - parent</h2>

    @foreach ($contacts as $contact)
        @livewire('nesting-id.entry', ['contact' => $contact], key($contact->id))
    @endforeach

    <hr>

    <button wire:click="$refresh">Refresh</button>
    {{ now() }}
</div>
