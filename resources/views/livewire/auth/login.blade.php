@extends('layouts.web.layout-web')

@section('contenido')

<div class="max-w-md mx-auto">

    {{-- TÍTULO --}}
    <h2 class="text-2xl font-bold mb-4 text-center">Iniciar sesión</h2>

    {{-- ERRORES --}}
    @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        <ul class="list-disc ml-4">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- MENSAJE DE ÉXITO --}}
    @if (session('status'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('login.store') }}" class="g_formulario">
        @csrf

        {{-- Email --}}
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" class="input-control" placeholder="email@example.com"
                value="{{ old('email') }}" required autofocus autocomplete="email">
            @error('email')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="form-group position-relative">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" class="input-control" placeholder="********" required
                autocomplete="current-password">

            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="link-forgot-password">
                ¿Olvidaste tu contraseña?
            </a>
            @endif

            @error('password')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Remember me --}}
        <div class="form-group checkbox-group">
            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Recuérdame</label>
        </div>

        {{-- Submit --}}
        <div class="form-group">
            <button type="submit" class="btn-primary w-100">
                Ingresar
            </button>
        </div>
    </form>

    {{-- Register link --}}
    @if (Route::has('register'))
    <div class="register-text">
        <span>¿No tienes una cuenta?</span>
        <a href="{{ route('register') }}" class="link-register">Regístrate</a>
    </div>
    @endif
</div>

@endsection