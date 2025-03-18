<div>
    <button wire:click.debounce.10ms='onCounter'>
        Click me, hurry!
    </button>
    <p>Counter {{ $counter }}</p>
</div>
