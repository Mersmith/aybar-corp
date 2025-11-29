@php
$inicioMes = $fechaActual->copy()->startOfMonth();
$primerDiaSemana = $inicioMes->dayOfWeekIso;
$diasEnMes = $inicioMes->daysInMonth;
@endphp

<div class="cal-grid">

    {{-- Espacios antes del 1 --}}
    @for ($i = 1; $i < $primerDiaSemana; $i++) <div class="cal-day empty">
</div>
@endfor

{{-- Días del mes --}}
@for ($dia = 1; $dia <= $diasEnMes; $dia++) @php $fecha=$fechaActual->copy()->day($dia)->toDateString();
    $items = collect($eventos)->where('date', $fecha);
    @endphp

    <div class="cal-day" wire:click="$dispatch('crearCita', { fecha: '{{ $fecha }}' })">
        <div class="cal-day-number">{{ $dia }}</div>

        @foreach ($items as $ev)
        <div class="cal-event" wire:click.stop="$dispatch('editarCita', { id: {{ $ev['id'] }} })">
            {{ $ev['title'] }}
        </div>
        @endforeach
    </div>
    @endfor

    </div>
