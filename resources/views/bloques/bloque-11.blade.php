@if (!empty($p_elemento) && !empty($p_elemento->contenido))

@php
$p = $p_elemento->contenido;

$titulo = $p['titulo'];
$titulo_descripcion = $p['titulo_descripcion'];
$lista = $p['lista'] ?? [];
@endphp

@include('partials.titulo-encabezado', [
'titulo' => $titulo,
'descripcion' => $titulo_descripcion,
'alineacion' => 'center',
'color' => 'color_1',
])

@if (!empty($lista) && is_array($lista))
<div class="bloque_11">
    @foreach ($lista as $item)
    <div class="card">
        @if (!empty($item['imagen']))
        <img src="{{ $item['imagen'] }}" alt="">
        @endif

        @if (!empty($item['titulo']))
        <h3 class="r_sub_titulo_1 color_1">{!! $item['titulo'] !!}</h3>
        @endif
    </div>
    @endforeach
</div>
@endif
@endif