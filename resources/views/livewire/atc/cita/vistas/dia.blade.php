@php
$fecha = $fechaActual->toDateString();
$items = collect($eventos)->where('date', $fecha);
@endphp

<div class="cal-day-box">

    <h3 class="cal-day-title">
        {{ $fechaActual->translatedFormat('l d F Y') }}
    </h3>

    <button class="cal-add-btn" wire:click="$dispatch('crearCita', { fecha: '{{ $fecha }}' })">
        + Crear cita
    </button>

    @forelse ($items as $ev)
    <div class="cal-event" wire:click.stop="$dispatch('editarCita', { id: {{ $ev['id'] }} })">
        {{ $ev['title'] }}
    </div>
    @empty
    <p class="cal-empty">Sin citas este día</p>
    @endforelse

</div>
