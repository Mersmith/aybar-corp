@section('tituloPagina', 'Editar ticket')
@section('anchoPantalla', '100%')

<div class="g_gap_pagina">
    <!-- CABECERA -->
    <div class="g_panel cabecera_titulo_pagina">
        <h2>Editar ticket</h2>

        <div class="cabecera_titulo_botones">
            <a href="{{ route('admin.ticket.vista.todo') }}" class="g_boton g_boton_light">
                Inicio <i class="fa-solid fa-house"></i>
            </a>

            <a href="{{ route('admin.ticket.vista.crear') }}" class="g_boton g_boton_primary">
                Crear <i class="fa-solid fa-square-plus"></i></a>

            <a href="{{ route('admin.ticket.vista.derivado', $ticket->id) }}" class="g_boton g_boton_warning">
                Derivar <i class="fa-solid fa-arrow-right-arrow-left"></i></a>

            <a href="{{ route('admin.ticket.vista.todo') }}" class="g_boton g_boton_darkt">
                <i class="fa-solid fa-arrow-left"></i> Regresar
            </a>
        </div>
    </div>

    <!-- FORMULARIO -->
    <div class="formulario">
        <div class="g_fila">
            <!-- IZQUIERDA -->
            <div class="g_columna_8 g_gap_pagina">
                <div class="g_panel">
                    <h4 class="g_panel_titulo">General</h4>

                    <div class="g_fila">
                        <div class="g_margin_bottom_10 g_columna_4">
                            <label>Área origen</label>
                            <input type="text" disabled value="{{ $ticket->area->nombre ?? 'Sin asignar' }}">
                        </div>

                        <div class="g_margin_bottom_10 g_columna_4">
                            <label>Tipo solicitud</label>
                            <input type="text" disabled value="{{ $ticket->tipoSolicitud->nombre ?? 'Sin asignar' }}">
                        </div>

                        <div class="g_margin_bottom_10 g_columna_4">
                            <label>Canal</label>
                            <input type="text" disabled value="{{ $ticket->canal->nombre ?? 'Sin asignar' }}">
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_bottom_10 g_columna_4">
                            <label>Cliente</label>
                            <input type="text" disabled value="{{ $ticket->cliente->name ?? 'Sin asignar' }}">
                        </div>

                        <div class="g_margin_bottom_10 g_columna_4">
                            <label for="estado_ticket_id">
                                Estado <span class="obligatorio"><i class="fa-solid fa-asterisk"></i></span>
                            </label>
                            <select id="estado_ticket_id" wire:model.live="estado_ticket_id" required>
                                <option value="" selected disabled>Seleccionar un estado</option>
                                @foreach ($estados as $estado)
                                <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                @endforeach
                            </select>
                            @error('estado_ticket_id')
                            <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="g_margin_bottom_10 g_columna_4">
                            <label for="usuario_asignado_id">
                                Asignado <span class="obligatorio"><i class="fa-solid fa-asterisk"></i></span>
                            </label>
                            <input type="text" disabled value="{{ $ticket->asignado->name ?? 'Sin asignar' }}">
                        </div>
                    </div>
                </div>

                <div class="g_panel">
                    <h4 class="g_panel_titulo">Detalle</h4>
                    <div class="g_fila">
                        <div class="g_columna_12">
                            <label for="asunto">Asunto <span class="obligatorio"><i
                                        class="fa-solid fa-asterisk"></i></span></label>
                            <textarea id="asunto" wire:model.live="asunto" rows="2"></textarea>
                            @error('asunto')
                            <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_columna_12">
                            <label for="descripcion">Descripción <span class="obligatorio"><i
                                        class="fa-solid fa-asterisk"></i></span></label>
                            <textarea id="descripcion" wire:model.live="descripcion" rows="5"></textarea>
                            @error('descripcion')
                            <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- DERECHA -->
            <div class="g_columna_4 g_gap_pagina g_columna_invertir">
                <div class="g_panel">
                </div>
            </div>
        </div>

        <div class="g_margin_top_20">
            <div class="formulario_botones">
                <button wire:click="store" class="guardar" wire:loading.attr="disabled" wire:target="store">
                    <span wire:loading.remove wire:target="store">Actualizar</span>
                    <span wire:loading wire:target="store">Actualizando...</span>
                </button>

                <a href="{{ route('admin.ticket.vista.todo') }}" class="cancelar">Cancelar</a>
            </div>
        </div>
    </div>

    <div class="g_panel g_margin_top_20">
        <h4 class="g_panel_titulo">Historial del ticket</h4>

        <div class="tabla_contenido g_margin_bottom_20">
            <div class="contenedor_tabla">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Acción</th>
                            <th>Detalle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($historial as $item)
                        <tr>
                            <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                            <td>{{ $item->usuario->name ?? 'Sistema' }}</td>
                            <td>{{ $item->accion }}</td>
                            <td>
                                @foreach (explode(' | ', $item->detalle) as $linea)
                                <div>{{ $linea }}</div>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>