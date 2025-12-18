<div>
    @if (session('success'))
        <div class="g_alerta_succes">
            <i class="fa-solid fa-circle-check"></i>
            <div>{{ session('success') }}</div>
        </div>
    @endif

    @if ($errors->any())
        <div class="g_alerta_error">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <div><strong>Por favor corrige los siguientes errores:</strong></div>
        </div>
    @endif

    <div class="g_panel">
        <h4 class="g_panel_titulo">QUIERO RECIBIR INFORMACIÓN</h4>

        <form wire:submit.prevent="enviar" class="formulario">

            <div class="g_margin_top_20">
                <div class="input_icono">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" wire:model="nombre" placeholder="Nombres y apellidos*" required>
                </div>
                @error('nombre')
                    <p class="mensaje_error">{{ $message }}</p>
                @enderror
            </div>

            <div class="g_margin_top_20">
                <div class="input_icono">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" wire:model="email" placeholder="Correo electrónico*" required>
                </div>
                @error('email')
                    <p class="mensaje_error">{{ $message }}</p>
                @enderror
            </div>

            <div class="g_margin_top_20">
                <div class="input_icono">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" wire:model="telefono" placeholder="Número de celular">
                </div>
                @error('telefono')
                    <p class="mensaje_error">{{ $message }}</p>
                @enderror
            </div>

            <div class="g_margin_top_20">
                <div class="input_icono">
                    <i class="fa-solid fa-id-card"></i>
                    <input type="text" wire:model="dni" placeholder="Número de documento*" required>
                </div>
                @error('dni')
                    <p class="mensaje_error">{{ $message }}</p>
                @enderror
            </div>

            <div class="g_margin_top_20">
                <label>
                    <input type="checkbox" wire:model="politica_uno">
                    <span>He leído y acepto el <a href="/tratamiento-de-datos-personales" target="_blank"
                            rel="noopener noreferrer"> <u>Tratamiento de mis datos personales</u>. </a></span>
                </label>
                @error('politica_uno')
                    <p class="mensaje_error">{{ $message }}</p>
                @enderror
            </div>

            <div class="g_margin_top_20">
                <label>
                    <input type="checkbox" wire:model="politica_dos">
                    <span>He leído y acepto la <a href="/politica-de-comunicaciones-comerciales" target="_blank"
                            rel="noopener noreferrer"> <u>Política para envío de comunicaciones comerciales</u>.
                        </a></span>
                </label>
                @error('politica_dos')
                    <p class="mensaje_error">{{ $message }}</p>
                @enderror
            </div>

            <div class="g_margin_top_20 formulario_botones centrar">
                <button type="submit" class="guardar">
                    <i class="fa-solid fa-paper-plane"></i> SOLICITAR INFORMACIÓN
                </button>
            </div>

        </form>
    </div>
</div>
