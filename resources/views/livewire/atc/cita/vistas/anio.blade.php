<div class="cal-year-grid">
    @for ($m = 1; $m <= 12; $m++) @php $fechaMes=\Carbon\Carbon::create($fechaActual->year, $m, 1);
        $eventosMes = collect($eventos)->filter(fn($e) =>
        \Carbon\Carbon::parse($e['date'])->month == $m
        );
        @endphp

        <div class="cal-year-box">
            <h4 class="cal-year-month">{{ $fechaMes->translatedFormat('F') }}</h4>

            @foreach ($eventosMes as $ev)
            <div class="cal-event-mini" wire:click.stop="$dispatch('editarCita', { id: {{ $ev['id'] }} })">
                {{ \Carbon\Carbon::parse($ev['date'])->format('d') }} - {{ $ev['title'] }}
            </div>
            @endforeach
        </div>

        @endfor
</div>
