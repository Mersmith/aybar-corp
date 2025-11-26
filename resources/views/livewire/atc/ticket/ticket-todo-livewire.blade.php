@section('tituloPagina', 'Ticket')

@section('anchoPantalla', '100%')

<div class="g_gap_pagina">
    <!--CABECERA TITULO PAGINA-->
    <div class="g_panel cabecera_titulo_pagina">
        <!--TITULO-->
        <h2>Ticket</h2>

        <!--BOTONES-->
        <div class="cabecera_titulo_botones">
            <a href="{{ route('admin.ticket.vista.todo') }}" class="g_boton g_boton_light">
                Inicio <i class="fa-solid fa-house"></i></a>

            <a href="{{ route('admin.ticket.vista.crear') }}" class="g_boton g_boton_primary">
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
        @if ($tickets->count())
        <!--TABLA CONTENIDO-->
        <div class="tabla_contenido g_margin_bottom_20">
            <div class="contenedor_tabla">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Ticket</th>
                            <th>Cliente</th>
                            <th>Area</th>
                            <th>Solicitud</th>
                            <th>Canal</th>
                            <th>Estado</th>
                            <th>Asignado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $index => $item)
                        <tr>
                            <td> {{ $index + 1 }} </td>
                            <td class="g_resaltar">ID: {{ $item->id }}</td>
                            <td class="g_resaltar">ID: {{ $item->cliente->id }} - {{ $item->cliente->name }}</td>
                            <td class="g_resaltar">ID: {{ $item->area->id }} - {{ $item->area->nombre }}</td>
                            <td class="g_resaltar">ID: {{ $item->tipoSolicitud->id }} - {{ $item->tipoSolicitud->nombre
                                }}</td>
                            <td class="g_resaltar">ID: {{ $item->canal->id }} - {{ $item->canal->nombre }}</td>
                            <td class="g_resaltar">{{ $item->estado->nombre }}</td>
                            <td class="g_resaltar">ID: {{ $item->asignado->id }} - {{ $item->asignado->name }}</td>

                            <td class="centrar_iconos">
                                <a href="{{ route('admin.ticket.vista.editar', $item->id) }}" class="g_accion_editar">
                                    <span><i class="fa-solid fa-pencil"></i></span>
                                </a>
                                <a href="{{ route('admin.ticket.vista.derivado', $item->id) }}" class="g_accion_ver">
                                    <span><i class="fa-solid fa-arrow-right-arrow-left"></i></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @if ($tickets->hasPages())
        <div class="g_paginacion">
            {{ $tickets->links('vendor.pagination.default-livewire') }}
        </div>
        @endif
        @else
        <div class="g_vacio">
            <p>No hay tickets disponibles.</p>
            <i class="fa-regular fa-face-grin-wink"></i>
        </div>
        @endif
    </div>
</div>