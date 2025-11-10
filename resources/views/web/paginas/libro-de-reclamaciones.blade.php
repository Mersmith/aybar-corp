@extends('layouts.web.layout-web')

@section('titulo', 'Libro de Reclamaciones')

@section('contenido')
<div class="r_centrar_pagina">
    <div class="r_pading_pagina r_gap_pagina">

        <div class="r_contenedor_columna">
            @include('partials.titulo-encabezado', [
            'titulo' => 'Libro de <span>Reclamaciones</span>',
            'alineacion' => 'center',
            'color' => 'color_1',
            ])

            <div class="contacto_formulario">
                {{-- Mensajes --}}
                @if (session('success'))
                <div class="alert alert-success">
                    <i class="fa-solid fa-circle-check"></i>
                    <div>{{ session('success') }}</div>
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-error">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <strong>Por favor corrige los siguientes errores:</strong>
                </div>
                @endif

                {{-- Formulario --}}
                <form action="{{ route('reclamaciones.enviar') }}" method="POST" class="g_formulario">
                    @csrf

                    <div class="r_fila">
                        <div class="form_grupo r_columna_4">
                            <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" required>
                            @error('nombre') <div class="error-text">{{ $message }}</div> @enderror
                        </div>

                        <div class="form_grupo r_columna_4">
                            <input type="text" name="apellido_paterno" placeholder="Apellido Paterno"
                                value="{{ old('apellido_paterno') }}" required>
                            @error('apellido_paterno') <div class="error-text">{{ $message }}</div> @enderror
                        </div>

                        <div class="form_grupo r_columna_4">
                            <input type="text" name="apellido_materno" placeholder="Apellido Materno"
                                value="{{ old('apellido_materno') }}" required>
                            @error('apellido_materno') <div class="error-text">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="r_fila">
                        <div class="form_grupo r_columna_4">
                            <input type="text" name="domicilio" placeholder="Domicilio" value="{{ old('domicilio') }}"
                                required>
                            @error('domicilio') <div class="error-text">{{ $message }}</div> @enderror
                        </div>

                        <div class="form_grupo r_columna_4">
                            <input type="text" name="telefono" placeholder="Teléfono (opcional)"
                                value="{{ old('telefono') }}">
                            @error('telefono') <div class="error-text">{{ $message }}</div> @enderror
                        </div>

                        <div class="form_grupo r_columna_4">
                            <input type="email" name="email" placeholder="Correo electrónico (opcional)"
                                value="{{ old('email') }}">
                            @error('email') <div class="error-text">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="r_fila">
                        <div class="form_grupo r_columna_4">
                            <select name="tipo_documento" required>
                                <option value="">-- Tipo de Documento --</option>
                                <option value="dni" {{ old('tipo_documento')=='dni' ? 'selected' : '' }}>DNI</option>
                                <option value="ruc" {{ old('tipo_documento')=='ruc' ? 'selected' : '' }}>RUC</option>
                                <option value="ce" {{ old('tipo_documento')=='ce' ? 'selected' : '' }}>Carné de
                                    Extranjería
                                </option>
                            </select>
                            @error('tipo_documento') <div class="error-text">{{ $message }}</div> @enderror
                        </div>

                        <div class="form_grupo r_columna_4">
                            <input type="text" name="numero_documento" placeholder="Número de Documento"
                                value="{{ old('numero_documento') }}" required>
                            @error('numero_documento') <div class="error-text">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="form_grupo">
                        <label><strong>Tipo de bien contratado:</strong></label>
                        <div class="radio_group">
                            <label>
                                <input type="radio" name="tipo_bien_contratado" value="producto" {{
                                    old('tipo_bien_contratado', 'producto' )=='producto' ? 'checked' : '' }} required>
                                Producto
                            </label>
                            <label>
                                <input type="radio" name="tipo_bien_contratado" value="servicio" {{
                                    old('tipo_bien_contratado')=='servicio' ? 'checked' : '' }} required>
                                Servicio
                            </label>
                        </div>
                        @error('tipo_bien_contratado') <div class="error-text">{{ $message }}</div> @enderror
                    </div>

                    <div class="form_grupo">
                        <input type="number" step="0.01" name="monto_reclamado" placeholder="Monto Reclamado (opcional)"
                            value="{{ old('monto_reclamado') }}">
                        @error('monto_reclamado') <div class="error-text">{{ $message }}</div> @enderror
                    </div>

                    <div class="form_grupo">
                        <textarea name="descripcion" placeholder="Descripción del producto o servicio"
                            required>{{ old('descripcion') }}</textarea>
                        @error('descripcion') <div class="error-text">{{ $message }}</div> @enderror
                    </div>

                    <div class="form_grupo">
                        <label><strong>Tipo de solicitud:</strong></label>
                        <div class="radio_group">
                            <label>
                                <input type="radio" name="tipo_pedido" value="reclamo" {{ old('tipo_pedido', 'reclamo'
                                    )=='reclamo' ? 'checked' : '' }} required>
                                Reclamo
                            </label>
                            <label>
                                <input type="radio" name="tipo_pedido" value="queja" {{ old('tipo_pedido')=='queja'
                                    ? 'checked' : '' }} required>
                                Queja
                            </label>
                        </div>
                        @error('tipo_pedido') <div class="error-text">{{ $message }}</div> @enderror
                    </div>

                    <div class="form_grupo">
                        <textarea name="detalle" placeholder="Detalle del reclamo o queja"
                            required>{{ old('detalle') }}</textarea>
                        @error('detalle') <div class="error-text">{{ $message }}</div> @enderror
                    </div>

                    <div class="form_grupo">
                        <textarea name="pedido" placeholder="Pedido del consumidor"
                            required>{{ old('pedido') }}</textarea>
                        @error('pedido') <div class="error-text">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit">
                        <i class="fa-solid fa-paper-plane"></i> Enviar Reclamo
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>
@endsection