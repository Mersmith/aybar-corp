@php
$fecha = $fechaActual->toDateString();
$items = collect($eventos)->where('date', $fecha);

// Horario de 6:00am a 10:00pm
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

            @php
            $eventosHora = $items->filter(fn($ev) =>
            substr($ev['time'], 0, 2) === substr($hora, 0, 2)
            );
            @endphp

            <div class="cal-hour-row">

                <div class="cal-hour-label">
                    {{ $hora }}
                </div>

                <div class="cal-hour-events">

                    @forelse ($eventosHora as $ev)
                    <div class="cal-event-detalle" wire:click.stop="$dispatch('editarCita', { id: {{ $ev['id'] }} })">

                        <div class="ev-hora">
                            <strong>{{ $ev['time'] }} - {{ $ev['end_time'] }}</strong>
                        </div>

                        <div>
                            <span class="ev-label">Motivo:</span>
                            {{ $ev['title'] }}
                        </div>

                        <div>
                            <span class="ev-label">Cliente:</span>
                            {{ $ev['cliente'] }}
                        </div>

                        <div>
                            <span class="ev-label">Sede:</span>
                            {{ $ev['sede'] ?? '—' }}
                        </div>

                        <div>
                            <span class="ev-label">Estado:</span>
                            <span class="estado estado-{{ $ev['estado'] }}">
                                {{ ucfirst($ev['estado']) }}
                            </span>
                        </div>

                    </div>
                    @empty
                    {{-- No hay eventos --}}
                    @endforelse

                </div>

            </div>

            @endforeach

        </div>
    </div>
