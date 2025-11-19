@extends('layouts.web.layout-web')

@section('contenido')

<h2 class="text-2xl font-bold mb-4">Restablecer contraseña</h2>
<p class="text-zinc-600 mb-6">Ingresa tu nueva contraseña para continuar.</p>

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

<!-- Mensaje de éxito -->
@if (session('status'))
<div class="bg-green-100 text-green-700 p-3 rounded mb-4">
    {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('password.update') }}" class="flex flex-col gap-6">
    @csrf

    <!-- Token -->
    <input type="hidden" name="token" value="{{ request()->route('token') }}">

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-zinc-700 mb-1">Correo electrónico</label>
        <input id="email" name="email" type="email" value="{{ request('email') }}" required
            class="w-full border border-zinc-300 px-4 py-2 rounded-md focus:ring focus:ring-blue-300">
        @error('email')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block text-sm font-medium text-zinc-700 mb-1">Nueva contraseña</label>
        <input id="password" name="password" type="password" required
            class="w-full border border-zinc-300 px-4 py-2 rounded-md focus:ring focus:ring-blue-300">
        @error('password')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Confirm -->
    <div>
        <label for="password_confirmation" class="block text-sm font-medium text-zinc-700 mb-1">Confirmar
            contraseña</label>
        <input id="password_confirmation" name="password_confirmation" type="password" required
            class="w-full border border-zinc-300 px-4 py-2 rounded-md focus:ring focus:ring-blue-300">
        @error('password_confirmation')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
        Restablecer contraseña
    </button>
</form>

@endsection