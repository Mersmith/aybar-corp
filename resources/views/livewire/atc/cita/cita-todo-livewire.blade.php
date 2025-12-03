@section('tituloPagina', 'Citas')
@section('anchoPantalla', '100%')

<div class="g_gap_pagina">

    <div class="g_panel cabecera_titulo_pagina">
        <h2>Citas</h2>

        <div class="cabecera_titulo_botones">
            <button wire:click="resetFiltros" class="g_boton g_boton_danger">
                Limpiar Filtros <i class="fa-solid fa-rotate-left"></i>
            </button>
        </div>
    </div>

    <div class="g_panel">
        <div class="formulario">

            <div class="g_fila">

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Buscar</label>
                    <input type="text" wire:model.live.debounce.800ms="buscar"
                        placeholder="ID, solicitante, receptor">
                </div>

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Sede</label>
                    <select wire:model.live="sede_id">
                        <option value="">Todas</option>
                        @foreach ($sedes as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Motivo</label>
                    <select wire:model.live="motivo_cita_id">
                        <option value="">Todos</option>
                        @foreach ($motivos as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Solicitante</label>
                    <select wire:model.live="usuario_solicita_id">
                        <option value="">Todos</option>
                        @foreach ($usuarios_admin as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Receptor</label>
                    <select wire:model.live="usuario_recibe_id">
                        <option value="">Todos</option>
                        @foreach ($usuarios_cliente as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Estado</label>
                    <select wire:model.live="estado_cita_id">
                        <option value="">Todos</option>
                        @foreach ($estados as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="g_fila">
                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Fecha Inicio</label>
                    <input type="date" wire:model.live="fecha_inicio">
                </div>

                <div class="g_margin_bottom_10 g_columna_2">
                    <label>Fecha Fin</label>
                    <input type="date" wire:model.live="fecha_fin">
                </div>
            </div>
        </div>

        <div class="tabla_contenido g_margin_bottom_20">
            <div class="contenedor_tabla">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Solicitante</th>
                            <th>Receptor</th>
                            <th>Sede</th>
                            <th>Motivo</th>
                            <th>Inicio</th>
                            <th>Fin</th>
                            <th>Estado</th>
                        </tr>
                    </thead>

                    @if ($citas->count())
                        <tbody>
                            @foreach ($citas as $item)
                                <tr>
                                    <td class="g_resaltar">{{ $item->id }}</td>
                                    <td>{{ $item->solicitante->name }}</td>
                                    <td>{{ $item->receptor->name }}</td>
                                    <td>{{ $item->sede->nombre ?? '-' }}</td>
                                    <td>{{ $item->motivo->nombre }}</td>
                                    <td>{{ $item->fecha_inicio->format('d/m/Y H:i') }}</td>
                                    <td>{{ $item->fecha_fin ? $item->fecha_fin->format('d/m/Y H:i') : '-' }}</td>
                                    <td>{{ $item->estado->nombre }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endif
                </table>
            </div>
        </div>

        @if ($citas->hasPages())
            <div class="g_paginacion">
                {{ $citas->links('vendor.pagination.default-livewire') }}
            </div>
        @endif

        @if ($citas->count() == 0)
            <div class="g_vacio">
                <p>No hay citas disponibles.</p>
            </div>
        @endif
    </div>

</div>
