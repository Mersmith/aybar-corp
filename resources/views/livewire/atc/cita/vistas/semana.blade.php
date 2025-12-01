@php
$inicio = $fechaActual->copy()->startOfWeek();
@endphp

<div class="cal-week-grid">
    @for ($i = 0; $i < 7; $i++) @php $day=$inicio->copy()->addDays($i);
        $fecha = $day->toDateString();
        $items = collect($eventos)->where('date', $fecha);
        @endphp

        <div class="cal-day">

            {{-- Abrir Día --}}
            <button class="cal-open-btn" wire:click="irAlDiaDeSemana('{{ $fecha }}')">
                Abrir
            </button>

            <div class="cal-day-number" wire:click="$dispatch('crearCita', { fecha: '{{ $fecha }}' })">
                {{ $day->translatedFormat('D d') }}
            </div>

            @foreach ($items as $ev)
            <div class="cal-event" wire:click.stop="$dispatch('editarCita', { id: {{ $ev['id'] }} })">
                {{ $ev['title'] }}
            </div>
            @endforeach
        </div>
        @endfor
</div>