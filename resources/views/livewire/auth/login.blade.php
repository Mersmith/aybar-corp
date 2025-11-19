@extends('layouts.web.layout-web')

@section('contenido')

<form method="POST" action="{{ route('login.store') }}" class="g_formulario">
    @csrf

    {{-- Email --}}
    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" class="input-control" placeholder="email@example.com" required
            autofocus autocomplete="email">
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

@endsection