@section('tituloPagina', 'Crear ticket')
@section('anchoPantalla', '100%')

<div class="g_gap_pagina">
    <!-- CABECERA -->
    <div class="g_panel cabecera_titulo_pagina">
        <h2>Crear cita</h2>

        <div class="cabecera_titulo_botones">
            <a href="{{ route('admin.cita.vista.todo') }}" class="g_boton g_boton_light">
                Inicio <i class="fa-solid fa-house"></i>
            </a>

            <a href="{{ route('admin.cita.vista.todo') }}" class="g_boton g_boton_darkt">
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
                            <label for="sede_id">
                                Sede <span class="obligatorio"><i class="fa-solid fa-asterisk"></i></span>
                            </label>
                            <select id="sede_id" wire:model.live="sede_id" required>
                                <option value="" selected disabled>Seleccionar una sede</option>
                                @foreach ($sedes as $sede)
                                    <option value="{{ $sede->id }}">{{ $sede->nombre }}</option>
                                @endforeach
                            </select>
                            @error('sede_id')
                                <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="g_margin_bottom_10 g_columna_4">
                            <label for="motivo_cita_id">
                                Motivo <span class="obligatorio"><i class="fa-solid fa-asterisk"></i></span>
                            </label>
                            <select id="motivo_cita_id" wire:model.live="motivo_cita_id" required>
                                <option value="" selected disabled>Seleccionar un motivo</option>
                                @foreach ($motivos as $motivo)
                                    <option value="{{ $motivo->id }}">{{ $motivo->nombre }}</option>
                                @endforeach
                            </select>
                            @error('motivo_cita_id')
                                <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="g_margin_bottom_10 g_columna_4">
                            <label for="usuario_solicita_id">
                                Creador <span class="obligatorio"><i class="fa-solid fa-asterisk"></i></span>
                            </label>
                            <select id="usuario_solicita_id" wire:model.live="usuario_solicita_id" required>
                                <option value="" selected disabled>Seleccionar un asignado</option>
                                @foreach ($usuarios_admin as $usuario)
                                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                @endforeach
                            </select>
                            @error('usuario_solicita_id')
                                <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_bottom_10 g_columna_4">
                            <label for="fecha_inicio">Fecha inicio <span class="obligatorio"><i
                                        class="fa-solid fa-asterisk"></i></span></label>
                            <input type="date" id="fecha_inicio" wire:model.live="fecha_inicio" required>
                            @error('fecha_inicio')
                                <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="g_margin_bottom_10 g_columna_4">
                            <label for="fecha_inicio">Fecha fin <span class="obligatorio"><i
                                        class="fa-solid fa-asterisk"></i></span></label>
                            <input type="date" id="fecha_inicio" wire:model.live="fecha_inicio" required>
                            @error('fecha_inicio')
                                <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="g_margin_bottom_10 g_columna_4">
                            <label for="fecha_inicio">Estado<span class="obligatorio"><i
                                        class="fa-solid fa-asterisk"></i></span></label>
                            <select id="estado" wire:model.live="estado">
                                <option value="0">DESACTIVADO</option>
                                <option value="1">ACTIVO</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="g_margin_top_20">
            <div class="formulario_botones">
                <button wire:click="store" class="guardar" wire:loading.attr="disabled">Guardar</button>
                
                <a href="{{ route('admin.cita.vista.todo') }}" class="cancelar">Cancelar</a>
            </div>
        </div>
    </div>
