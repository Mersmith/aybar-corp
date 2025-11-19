@extends('layouts.web.layout-web')

@section('contenido')

<div class="max-w-md mx-auto">

    <h2 class="text-2xl font-bold mb-4 text-center">Recuperar contraseña</h2>

    <p class="text-zinc-600 text-center mb-6">
        Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
    </p>

    <!-- Mensaje de éxito -->
    @if (session('status'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('status') }}
    </div>
    @endif

    <!-- Errores -->
    @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        <ul class="list-disc ml-4">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-6">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-zinc-700 mb-1">Correo electrónico</label>
            <input id="email" type="email" name="email" required autofocus
                class="w-full border border-zinc-300 px-4 py-2 rounded-md focus:ring focus:ring-blue-300"
                placeholder="email@example.com">

            @error('email')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
            Enviar enlace de recuperación
        </button>
    </form>

    <div class="text-center mt-6 text-sm text-gray-600">
        <span>¿Recordaste tu contraseña?</span>
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
            Inicia sesión
        </a>
    </div>

</div>

@endsection