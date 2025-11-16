@section('tituloPagina', 'Crear separación de lote')
@section('anchoPantalla', '100%')

<div class="g_gap_pagina">
    <!-- CABECERA -->
    <div class="g_panel cabecera_titulo_pagina">
        <h2>Crear separación de lote</h2>

        <div class="cabecera_titulo_botones">
            <a href="{{ route('admin.separacion-lote.vista.todo') }}" class="g_boton g_boton_light">
                Inicio <i class="fa-solid fa-house"></i>
            </a>

            <a href="{{ route('admin.separacion-lote.vista.todo') }}" class="g_boton g_boton_darkt">
                <i class="fa-solid fa-arrow-left"></i> Regresar
            </a>
        </div>
    </div>

    <!-- FORMULARIO -->
    <form wire:submit.prevent="update" class="formulario">
        @if ($separacion->estado === 'usada_en_venta')
            <div class="g_panel" style="background:#fdd;">
                <h3>Esta separación está usada en venta.</h3>
                <p>No se puede editar.</p>
            </div>
        @else
            <div class="g_fila">
                <!-- IZQUIERDA -->
                <div class="g_columna_8 g_gap_pagina">
                    <div class="g_panel">
                        <h4 class="g_panel_titulo">General</h4>

                        <div class="g_fila">
                            <div class="g_margin_bottom_10 g_columna_4">
                                <label for="proyecto_id">
                                    Proyecto <span class="obligatorio"><i class="fa-solid fa-asterisk"></i></span>
                                </label>
                                <select id="proyecto_id" wire:model.live="proyecto_id" required>
                                    <option value="" selected disabled>Seleccionar un proyecto</option>
                                    @foreach ($proyectos as $proyecto)
                                        <option value="{{ $proyecto->id }}">{{ $proyecto->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('proyecto_id')
                                    <p class="mensaje_error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="g_margin_bottom_10 g_columna_4">
                                <label for="lote_id">
                                    Lote <span class="obligatorio"><i class="fa-solid fa-asterisk"></i></span>
                                </label>
                                <select id="lote_id" wire:model.live="lote_id" required>
                                    <option value="" selected disabled>Seleccionar un lote</option>
                                    @foreach ($lotes as $lote)
                                        <option value="{{ $lote->id }}">
                                            {{ $lote->numero_lote }} - {{ $lote->manzana }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('lote_id')
                                    <p class="mensaje_error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="g_margin_bottom_10 g_columna_4">
                                <label for="cliente_id">
                                    Cliente <span class="obligatorio"><i class="fa-solid fa-asterisk"></i></span>
                                </label>
                                <select id="cliente_id" wire:model.live="cliente_id" required>
                                    <option value="" selected disabled>Seleccionar un cliente</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">
                                            {{ $cliente->nombre_completo }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('cliente_id')
                                    <p class="mensaje_error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="g_fila">
                            <div class="g_margin_bottom_10 g_columna_4">
                                <label for="monto">
                                    Monto <span class="obligatorio"><i class="fa-solid fa-asterisk"></i></span>
                                </label>
                                <input type="number" step="0.01" id="monto" wire:model.live="monto">
                                @error('monto')
                                    <p class="mensaje_error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DERECHA -->
                <div class="g_columna_4 g_gap_pagina g_columna_invertir">
                    <div class="g_panel">
                        <h4 class="g_panel_titulo">Estado</h4>
                        <select wire:model.live="estado">
                            <option value="activa">ACTIVA</option>
                            <option value="usada_en_venta">USADA EN VENTA</option>
                            <option value="cancelada">CANCELADA</option>
                        </select>
                        @error('estado')
                            <p class="mensaje_error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="g_panel">
                        <label for="fecha_separacion">
                            Fecha separación <span class="obligatorio"><i class="fa-solid fa-asterisk"></i></span>
                        </label>
                        <input type="date" id="fecha_separacion" wire:model.live="fecha_separacion">
                        @error('fecha_separacion')
                            <p class="mensaje_error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="g_margin_top_20">
                <div class="formulario_botones">
                    <button wire:click="update" class="guardar" wire:loading.attr="disabled" wire:target="update">
                        <span wire:loading.remove wire:target="update">Actualizar</span>
                        <span wire:loading wire:target="update">Actualizando...</span>
                    </button>

                    <a href="{{ route('admin.separacion-lote.vista.todo') }}" class="cancelar">Cancelar</a>
                </div>
            </div>
        @endif
    </form>
</div>
