<div>
    <button class="waves-effect waves-light btn" wire:click="increment" wire:loading.attr="disabled"
        wire:target="increment, decrement">increment</button>
    <br>
    {{ $counter }}
    <br>
    <button class="waves-effect waves-light btn" wire:click="decrement" wire:loading.attr="disabled"
        wire:target="increment, decrement">Decrement</button>
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
