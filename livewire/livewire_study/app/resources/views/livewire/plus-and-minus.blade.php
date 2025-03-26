<div>
    <p>The value is {{ $value }}</p>
    <button wire:click.debounce.10ms='add'>Add</button>
    <button wire:click.debounce.10ms='minus'>Minus</button>
</div>
