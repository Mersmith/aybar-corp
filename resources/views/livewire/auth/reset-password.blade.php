@extends('layouts.web.layout-web')

@section('titulo', 'Restablecer contraseña')

@section('contenido')

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

                <div class="login_formulario_logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/imagen/logo.png') }}" alt="" />
                    </a>
                </div>

                <h1 class="titulo_formulario">Restablecer contraseña</h1>

                <p class="descripcion_formulario">Ingrese su nueva contraseña para continuar.</p>

                <div class="r_gap_pagina r_margin_top_40">

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
                                {{-- <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul> --}}
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}" class="g_formulario">
                        @csrf

                        <input type="hidden" name="token" value="{{ request()->route('token') }}">

                        <div class="form_grupo">
                            <label for="email">Correo electrónico</label>
                            <input id="email" name="email" type="email" value="{{ request('email') }}" required>
                            @error('email')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_grupo">
                            <label for="password">Nueva contraseña</label>
                            <input id="password" name="password" type="password" required>
                            @error('password')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form_grupo">
                            <label for="password_confirmation">Confirmar contraseña</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required>
                            @error('password_confirmation')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit">
                            Restablecer
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
