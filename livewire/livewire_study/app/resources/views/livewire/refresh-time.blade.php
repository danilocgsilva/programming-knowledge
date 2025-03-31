<div>
    <p>The time is {{ (new DateTime())->format('Y-m-d H:i:s') }}</p>    
    <button wire:click='$refresh'>Refresh</button>
</div>
