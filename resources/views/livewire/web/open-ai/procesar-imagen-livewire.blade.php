<div class="g_panel contenedor_procesar_imagen">

    <div class="g_panel_titulo">
        <h2>Subir comprobante</h2>
    </div>

    @dump($cuota, $lote)

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
            <div class="r_gap_pagina">
                <div class="r_titulo_panel">
                    <h2>Datos detectados</h2>
                </div>

                <ul>
                    <li><strong class="r_negrita">N° Comprobante:</strong> {{ $datos['numero'] ?? '—' }}</li>
                    <li><strong class="r_negrita">Banco:</strong> {{ $datos['banco'] ?? '—' }}</li>
                    <li><strong class="r_negrita">Monto:</strong> {{ $datos['monto'] ?? '—' }}</li>
                    <li><strong class="r_negrita">Fecha:</strong> {{ $datos['fecha'] ?? '—' }}</li>
                </ul>

                <button wire:click="guardar" class="g_boton_personalizado verde">
                    Guardar envidencia
                </button>
            </div>
            @endif
        </div>
    </div>
    @endif

</div>