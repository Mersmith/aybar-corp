@extends('layouts.web.layout-web')

@section('contenido')
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

                <div class="login_formulario_logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/imagen/logo.png') }}" alt="">
                    </a>
                </div>

                <h1 class="titulo_formulario">¡Hola! Bienvenido nuevamente</h1>

                <p class="descripcion_formulario">
                    Inicie sesión con sus credenciales para continuar.
                </p>

                @if (session('status'))
                    <div class="g_alerta_succes">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="g_alerta_error">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <div>
                            <strong>Por favor corrige los siguientes errores:</strong>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('login.store') }}" class="g_formulario">
                    @csrf

                    <div class="form_grupo">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form_grupo">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" required>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="link-forgot-password">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif

                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form_grupo">
                        <label for="remember">
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            Recordarme
                        </label>
                    </div>

                    <button type="submit">
                        Ingresar
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
