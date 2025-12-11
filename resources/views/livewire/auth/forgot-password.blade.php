@extends('layouts.web.layout-web')

@section('titulo', 'Recuperar contraseña')

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

                <h1 class="titulo_formulario">Recuperar contraseña</h1>

                <p class="descripcion_formulario">Ingresa tu correo electrónico y te enviaremos un enlace para restablecer
                    tu contraseña.</p>

                <div class="g_gap_pagina g_margin_top_40">

                    @if (session('status'))
                        <div class="g_alerta_succes">
                            <i class="fa-solid fa-circle-check"></i>
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="g_alerta_error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><i class="fa-solid fa-triangle-exclamation"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="g_formulario">
                        @csrf

                        <div class="form_grupo">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                autofocus>
                            @error('email')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit">
                            Enviar enlace
                        </button>

                        <a href="{{ route('login') }}" class="recuperar_clave">
                            <span>¿Recordaste tu contraseña?</span>
                            Inicia sesión
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
