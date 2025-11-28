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
        <div class="formulario">
            <div class="g_fila">
                <div class="g_margin_bottom_10 g_columna_2">
                    <label>DNI/Nombres</label>
                    <input type="text" wire:model.live.debounce.1300ms="buscar" id="buscar" name="buscar">
                </div>

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Area </label>
                    <select wire:model.live="area">
                        <option value="">Todos</option>
                        @foreach ($areas as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Solicitud </label>
                    <select wire:model.live="solicitud">
                        <option value="">Todos</option>
                        @foreach ($solicitudes as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Canal </label>
                    <select wire:model.live="canal">
                        <option value="">Todos</option>
                        @foreach ($canales as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Estado </label>
                    <select wire:model.live="estado">
                        <option value="">Todos</option>
                        @foreach ($estados as $estadoItem)
                        <option value="{{ $estadoItem->id }}">{{ $estadoItem->nombre }}</option>
                        @endforeach
                    </select>
                </div>
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
                            <td class="g_resaltar">{{ $item->id }}</td>
                            <td class="g_resaltar">{{ $item->cliente->name }}</td>
                            <td class="g_resaltar">{{ $item->area->nombre }}</td>
                            <td class="g_resaltar">{{ $item->tipoSolicitud->nombre }}</td>
                            <td class="g_resaltar">{{ $item->canal->nombre }}</td>
                            <td class="g_resaltar">{{ $item->estado->nombre }}</td>
                            <td class="g_resaltar">{{ $item->asignado->name }}</td>

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