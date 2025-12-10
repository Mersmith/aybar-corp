<div class="contenedor_login">
    <div class="contenedor_login_imagen">
        <!--IMAGEN-->
        <img src="{{ asset('assets/imagenes/nosotros/nosotros-2.jpg') }}" alt="" />
        <!--TEXTO-->
        <div>
            <h2>"Sorteamos cada mes miles de productos"</h2>
            <h3>Nickol Sinchi </h3>
            <p>Propietaria de Aybar Las</p>
        </div>
    </div>

    <div class="contenedor_login_formulario">
        <div class="login_formulario_centrar">

            <!-- Volver a ingresar -->
            <div class="login_formulario_arriba">
                <span>¿Ya tienes una cuenta?</span>
                <a href="{{ route('ingresar.socio') }}">Ingresar</a>
            </div>

            <!-- Logo -->
            <div class="login_formulario_logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/imagen/logo-2.png') }}" alt="">
                </a>
            </div>

            <h1 class="titulo_formulario">Crear una cuenta</h1>
            <p class="descripcion_formulario">Regístrate para continuar.</p>

            @if ($errors->any())
            <div class="g_alerta_error">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <div>
                    <strong>Por favor corrige los siguientes errores:</strong>
                </div>
            </div>
            @endif

            <form wire:submit.prevent="registrar" class="g_formulario">

                <div class="form_grupo">
                    <label>Correo electrónico</label>
                    <input type="email" wire:model="email" required>
                    @error('email')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form_grupo">
                    <label>Contraseña</label>
                    <input type="password" wire:model="password" required>
                    @error('password')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form_grupo">
                    <label>Repetir contraseña</label>
                    <input type="password" wire:model="password_confirmation" required>
                </div>

                <button type="submit">Crear cuenta</button>

                <a href="" class="recuperar_clave">¿Necesistas ayuda?</a>
            </form>
        </div>
    </div>
</div>