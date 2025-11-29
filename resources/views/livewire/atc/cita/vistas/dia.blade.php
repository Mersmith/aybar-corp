@php
$fecha = $fechaActual->toDateString();
$items = collect($eventos)->where('date', $fecha);
$horas = collect();

for ($h = 6; $h <= 22; $h++) { $horas->push(sprintf('%02d:00', $h));
    }
    @endphp

    <div class="cal-day-box">

        <h3 class="cal-day-title">
            {{ $fechaActual->translatedFormat('l d F Y') }}
        </h3>

        <button class="cal-add-btn" wire:click="$dispatch('crearCita', { fecha: '{{ $fecha }}' })">
            + Crear cita
        </button>

        <div class="cal-day-grid">

            @foreach ($horas as $hora)
            <div class="cal-hour-row">

                <div class="cal-hour-label">
                    {{ $hora }}
                </div>

                <div class="cal-hour-events">

                    @php
                    $eventosHora = $items->filter(fn($ev) => str_starts_with($ev['time'], substr($hora, 0, 2)));
                    @endphp

                    @forelse ($eventosHora as $ev)
                    <div class="cal-event" wire:click.stop="$dispatch('editarCita', { id: {{ $ev['id'] }} })">
                        {{ $ev['label'] }}
                    </div>
                    @empty
                    {{-- nada aquí, hora sin eventos --}}
                    @endforelse

                </div>

            </div>
            @endforeach

        </div>
    </div>
