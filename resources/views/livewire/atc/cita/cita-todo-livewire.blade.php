<div class="cal-container">

    <!-- Botones de vista -->
    <div class="cal-view-buttons">
        <button wire:click="cambiarVista('anio')" class="{{ $vista === 'anio' ? 'active' : '' }}">
            Año
        </button>

        <button wire:click="cambiarVista('mes')" class="{{ $vista === 'mes' ? 'active' : '' }}">
            Mes
        </button>

        <button wire:click="cambiarVista('semana')" class="{{ $vista === 'semana' ? 'active' : '' }}">
            Semana
        </button>

        <button wire:click="cambiarVista('dia')" class="{{ $vista === 'dia' ? 'active' : '' }}">
            Día
        </button>
    </div>

    <!-- Navegación -->
    <div class="cal-header">
        <button wire:click="navegar(-1)">◀</button>

        <h2>
            @switch($vista)
            @case('mes') {{ $fechaActual->translatedFormat('F Y') }} @break
            @case('semana') Semana {{ $fechaActual->weekOfYear }} @break
            @case('dia') {{ $fechaActual->translatedFormat('d F Y') }} @break
            @case('anio') {{ $fechaActual->year }} @break
            @endswitch
        </h2>

        <button wire:click="navegar(1)">▶</button>
    </div>

    {{-- incluir plantillas según vista --}}
    @include("livewire.atc.cita.vistas.{$vista}")


</div>