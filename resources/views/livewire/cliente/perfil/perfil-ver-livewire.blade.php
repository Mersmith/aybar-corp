<div class="r_gap_pagina">
    @if (session()->has('success'))
        <div class="g_alerta alerta_exito">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="g_alerta alerta_error">
            {{ session('error') }}
        </div>
    @endif

    <div class="r_panel">
        <div class="r_titulo_panel">
            <h2>Mi perfil</h2>
        </div>

        <form wire:submit.prevent="actualizarDatos" class="g_formulario">
            <div class="r_fila">
                <div class="form_grupo r_columna_4">
                    <label for="nombre">Nombre</label>
                    <input type="text" wire:model="nombre" name="nombre" id="nombre">
                    @error('nombre')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form_grupo r_columna_4">
                    <label for="apellido_paterno">Apellido paterno</label>
                    <input type="text" wire:model="apellido_paterno" name="apellido_paterno" id="apellido_paterno">
                    @error('apellido_paterno')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form_grupo r_columna_4">
                    <label for="apellido_materno">Apellido materno</label>
                    <input type="text" wire:model="apellido_materno" name="apellido_materno" id="apellido_materno">
                    @error('apellido_materno')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="r_fila">
                <div class="form_grupo r_columna_4">
                    <label for="dni">DNI</label>
                    <input type="text" wire:model="dni" name="dni" id="dni" autocomplete="off">
                    @error('dni')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form_grupo r_columna_4">
                    <label for="celular">Celular</label>
                    <input type="text" wire:model="celular" name="celular" id="celular" autocomplete="tel">
                    @error('celular')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form_grupo r_columna_4">
                    <label for="email">Email</label>
                    <input type="email" wire:model="email" name="email" id="email" autocomplete="email"
                        readonly disabled>
                </div>
            </div>

            <div>
                <button type="submit">Actualizar</button>
            </div>
        </form>
    </div>

    <div class="r_panel">
        <div class="r_titulo_panel">
            <h2>Cambiar contraseña</h2>
        </div>

        <form wire:submit.prevent="actualizarClave" class="g_formulario">
            <div class="r_fila">
                <div class="form_grupo r_columna_6">
                    <label for="clave_actual">Contraseña actual</label>
                    <input type="password" wire:model="clave_actual" name="clave_actual" id="clave_actual">
                    @error('clave_actual')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form_grupo r_columna_6">
                    <label for="clave_nueva">Nueva contraseña</label>
                    <input type="password" wire:model="clave_nueva" name="clave_nueva" id="clave_nueva">
                    @error('clave_nueva')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div>
                <button type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</div>
