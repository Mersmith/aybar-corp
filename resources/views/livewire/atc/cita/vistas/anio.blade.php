<div class="cal-year-grid">

    @for ($m = 1; $m <= 12; $m++) @php $fechaMes=\Carbon\Carbon::create($fechaActual->year, $m, 1);

        // Total de eventos en ese mes
        $totalMes = collect($eventos)->filter(function ($e) use ($m) {
        return \Carbon\Carbon::parse($e['date'])->month == $m;
        })->count();
        @endphp

        <div class="cal-year-box">

            <h4 class="cal-year-month">
                {{ $fechaMes->translatedFormat('F') }}
            </h4>

            <div class="cal-year-total">
                {{ $totalMes }} citas
            </div>

            <button class="cal-open-btn" wire:click="irAlMes({{ $m }})">
                Abrir
            </button>

        </div>
        @endfor

</div>