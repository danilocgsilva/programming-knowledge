<div>
    Increment amount: <input type="number" wire:model.live="incrementAmount" /><br />
    Increment: <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button><br /><br />
    <span style="font-size: 2rem; font-weight: bold;">Value: {{ $value }}</span>
</div>
