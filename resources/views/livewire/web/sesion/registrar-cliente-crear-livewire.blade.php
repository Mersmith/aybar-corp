<div class="contenedor_login">

    <div class="contenedor_login_imagen">
        <img src="{{ asset('assets/imagenes/nosotros/nosotros-2.jpg') }}" alt="" />
        <div>
            <h2>"Sorteamos cada mes miles de productos"</h2>
            <h3>Nickol Sinchi</h3>
            <p>Propietaria de Aybar Las</p>
        </div>
    </div>

    <div class="contenedor_login_formulario">
        <div class="login_formulario_centrar">

            <div class="login_formulario_arriba">
                <span>¿Ya tienes una cuenta?</span>
                <a href="{{ route('ingresar.cliente') }}">Ingresar</a>
            </div>

            <div class="login_formulario_logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/imagen/logo.png') }}" alt="" />
                </a>
            </div>

            <h1 class="titulo_formulario">¡HOLA! CREA UNA CUENTA</h1>

            @if (!$cliente_encontrado)
            <p class="descripcion_formulario">Primero ingresa tu DNI para validar.</p>

            @if (session('error'))
            <div class="g_alerta_error">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div>{{ session('error') }}</div>
            </div>
            @endif

            <div class="g_formulario">
                <div class="form_grupo">
                    <label>DNI</label>
                    <input type="text" wire:model="dni">
                    @error('dni') <div class="error">{{ $message }}</div> @enderror
                </div>

                <button wire:click="buscarCliente">Validar DNI</button>
            </div>
            @endif

            @if ($cliente_encontrado)
            <p class="descripcion_formulario">DNI validado: {{ $cliente_encontrado['nombre'] ?? 'Cliente encontrado' }}
            </p>

            @if (session('status'))
            <div class="g_alerta_succes">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('status') }}
            </div>
            @endif

            <form wire:submit.prevent="registrar" class="g_formulario">

                <div class="form_grupo">
                    <label>Correo electrónico</label>
                    <input type="email" wire:model="email" required>
                    @error('email') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="form_grupo">
                    <label>Contraseña</label>
                    <input type="password" wire:model="password" required>
                    @error('password') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="form_grupo">
                    <label>Repetir contraseña</label>
                    <input type="password" wire:model="password_confirmation" required>
                </div>

                <button type="submit">Crear cuenta</button>
            </form>
            @endif

        </div>
    </div>
</div>