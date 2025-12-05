<div class="contenedor_procesar_imagen">

    <div class="g_panel_titulo">
        <h2>Subir comprobante</h2>
    </div>

    @if (session('success'))
    <div class="g_alerta_succes">
        <i class="fa-solid fa-circle-check"></i>
        {{ session('success') }}
    </div> @endif

    @if (session()->has('error'))
    <div class="g_alerta_error">
        <i class="fa-solid fa-triangle-exclamation"></i>
        {{ session('error') }}
    </div>
    @endif

    <label class="dropzone">
        <p>Haz clic para que subas la imagen de tu comprobante</p>
        <input type="file" wire:model="imagen" accept="image/*">
    </label>

    @error('imagen')
    <div class="g_alerta_error">
        <i class="fa-solid fa-triangle-exclamation"></i>
        {{ $message}}
    </div>
    @enderror

    @if ($imagen)
    <div class="resultados_grid">
        <div class="preview">
            <button class="g_boton_cerrar" wire:click="eliminarImagen"><i class="fa-solid fa-xmark"></i></button>
            <img src="{{ $imagen->temporaryUrl() }}">
        </div>

        <div>
            @if (!$datos)
            <button wire:click="procesarImagen" class="g_boton_personalizado verde" wire:loading.attr="disabled"
                wire:target="procesarImagen">
                <span wire:loading.remove wire:target="procesarImagen">Analizar comprobante</span>
                <span wire:loading wire:target="procesarImagen">Comprobando...</span>
            </button>
            @else
            <div class="g_gap_pagina">
                <div class="g_panel_titulo">
                    <h2>Datos detectados</h2>
                </div>

                <div class="formulario">
                    <div class="g_fila">
                        <div class="g_margin_bottom_20 g_columna_12">
                            <label>N° Comprobante</label>
                            <input type="text" disabled value="{{ $datos['numero'] ?? 'No se detecta' }}">
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_bottom_20 g_columna_12">
                            <label>Banco</label>
                            <input type="text" disabled value="{{ $datos['banco'] ?? 'No se detecta' }}">
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_bottom_20 g_columna_12">
                            <label>Monto</label>
                            <input type="text" disabled value="{{ $datos['monto'] ?? 'No se detecta' }}">
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_bottom_20 g_columna_12">
                            <label>Fecha</label>
                            <input type="text" disabled value="{{ $datos['fecha'] ?? 'No se detecta' }}">
                        </div>
                    </div>

                    <div class="formulario_botones">
                        <button wire:click="guardar" class="g_boton_personalizado verde">
                            Guardar envidencia
                        </button>
                    </div>
                </div>


            </div>
            @endif
        </div>
    </div>
    @endif

</div>