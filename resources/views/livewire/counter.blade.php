<div>
    <h3>Contatore</h3>
    <h5>{{$count}}</h5>
    <button class="btn btn-primary" wire:click="increment">+</button>

    <button class="btn btn-danger" wire:click="decrement">-</button>

    <button class="btn btn-warning" wire:click="azzera">Azzera</button>

    <br>
    model <input type="number" wire:model="count">

    <br>
    model.live <input type="number" wire:model.live="count">

    <br>
    model.live.debounce.500ms <input type="number" wire:model.debounce.500ms="count">

    <br>
    model.blur <input type="number" wire:model.blur="count">

    <br>
    model.change <input type="number" wire:model.change="count">

    <br>
    <div x-data="{ number:''}">
        <input type="number" x-model="number">
        <button class="btn btn-info" wire:click="setCounter(number)">Set Counter</button>
    </div>
</div>
