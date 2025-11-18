@section('tituloPagina', 'Lote')

@section('anchoPantalla', '100%')

<div class="g_gap_pagina">
    <!--CABECERA TITULO PAGINA-->
    <div class="g_panel cabecera_titulo_pagina">
        <!--TITULO-->
        <h2>Lote</h2>

        <!--BOTONES-->
        <div class="cabecera_titulo_botones">
            <a href="{{ route('admin.lote.vista.todo') }}" class="g_boton g_boton_light">
                Inicio <i class="fa-solid fa-house"></i></a>

            <a href="{{ route('admin.lote.vista.crear') }}" class="g_boton g_boton_primary">
                Crear <i class="fa-solid fa-square-plus"></i></a>
        </div>
    </div>

    <!--TABLA-->
    <div class="g_panel">
        <div class="tabla_cabecera">
            <div class="tabla_cabecera_buscar">
                <form action="">
                    <input type="text" wire:model.live.debounce.1300ms="buscar" id="buscar" name="buscar"
                        placeholder="Buscar...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
            </div>
        </div>
        @if ($items->count())
        <!--TABLA CONTENIDO-->
        <div class="tabla_contenido g_margin_bottom_20">
            <div class="contenedor_tabla">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Proyecto</th>
                            <th>N° Lote</th>
                            <th>Manzana</th>
                            <th>Area</th>
                            <th>Precio m2</th>
                            <th>Precio referencial</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $index => $item)
                        <tr>
                            <td> {{ $index + 1 }} </td>
                            <td class="g_resaltar">ID: {{ $item->proyecto->id }} - {{ $item->proyecto->nombre }}</td>
                            <td class="g_resaltar">{{ $item->numero_lote }}</td>
                            <td class="g_inferior g_resumir">{{ $item->manzana }}</td>
                            <td class="g_resaltar">{{ $item->area }}</td>
                            <td class="g_resaltar">{{ $item->precio_m2 }}</td>
                            <td class="g_resaltar">{{ $item->precio_lista }}</td>
                            <td class="centrar_iconos">
                                <a href="{{ route('admin.lote.vista.editar', $item->id) }}" class="g_accion_editar">
                                    <span><i class="fa-solid fa-pencil"></i></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @if ($items->hasPages())
        <div class="g_paginacion">
            {{ $items->links('vendor.pagination.default-livewire') }}
        </div>
        @endif
        @else
        <div class="g_vacio">
            <p>No hay items disponibles.</p>
            <i class="fa-regular fa-face-grin-wink"></i>
        </div>
        @endif
    </div>
</div>