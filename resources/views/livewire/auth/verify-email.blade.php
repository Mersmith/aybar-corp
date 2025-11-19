@extends('layouts.web.layout-web')

@section('titulo', 'Verifica tu correo')

@section('contenido')

<div class="mt-4 flex flex-col gap-6">

    <p class="text-center">
        {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
    </p>

    @if (session('status') == 'verification-link-sent')
    <p class="text-center font-medium text-green-600 dark:text-green-400">
        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
    </p>
    @endif

    <div class="flex flex-col items-center justify-between space-y-3">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button class="btn btn-primary w-full" type="submit">
                {{ __('Resend verification email') }}
            </button>
        </form>

        <form method="POST"
            action="{{ auth()->user()->role === 'admin' ? route('logout.admin') : route('logout.admin') }}">
            @csrf
            <button class="btn btn-secondary w-full" type="submit">
                {{ __('Log out') }}
            </button>
        </form>
    </div>

</div>

@endsection