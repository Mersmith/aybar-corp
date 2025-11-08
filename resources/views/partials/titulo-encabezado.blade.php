<div class="partials_titulo_encabezado r_titulo_1">
    @if (!empty($titulo))
    <h2 class="{{ $color }}" style="text-align: {{ $alineacion }}">{!! $titulo !!}</h2> @endif

    @if (!empty($descripcion))
    <p class="{{ $color }}" style="text-align: {{ $alineacion }}">{!! $descripcion !!}</p>
    @endif
</div>